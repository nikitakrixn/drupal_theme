/**
 * @file
 * JavaScript behaviors for CodeMirror integration.
 */

(function ($, Drupal) {

  'use strict';

  // @see http://codemirror.net/doc/manual.html#config
  Drupal.webform = Drupal.webform || {};
  Drupal.webform.codeMirror = Drupal.webform.codeMirror || {};
  Drupal.webform.codeMirror.options = Drupal.webform.codeMirror.options || {};

  /**
   * Initialize CodeMirror editor.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformCodeMirror = {
    attach: function (context) {
      if (!window.CodeMirror) {
        return;
      }

      // Webform CodeMirror editor.
      $(context).find('textarea.js-webform-codemirror').once('webform-codemirror').each(function () {
        var $input = $(this);

        // Open all closed details, so that editor height is correctly calculated.
        var $details = $(this).parents('details:not([open])');
        $details.attr('open', 'open');

        // #59 HTML5 required attribute breaks hack for webform submission.
        // https://github.com/marijnh/CodeMirror-old/issues/59
        $(this).removeAttr('required');

        var options = $.extend({
          mode: $(this).attr('data-webform-codemirror-mode'),
          lineNumbers: true,
          lineWrapping: ($(this).attr('wrap') === 'off') ? false : true,
          viewportMargin: Infinity,
          readOnly: ($(this).prop('readonly') || $(this).prop('disabled')) ? true : false,
          extraKeys: {
            // Setting for using spaces instead of tabs - https://github.com/codemirror/CodeMirror/issues/988
            Tab: function (cm) {
              var spaces = Array(cm.getOption('indentUnit') + 1).join(' ');
              cm.replaceSelection(spaces, 'end', '+element');
            },
            // On 'Escape' move to the next tabbable input.
            // @see http://bgrins.github.io/codemirror-accessible/
            Esc: function (cm) {
              // Must show and then textarea so that we can determine
              // its tabindex.
              var textarea = $(cm.getTextArea());
              $(textarea).show().addClass('visually-hidden');
              var $tabbable = $(':tabbable');
              var tabindex = $tabbable.index(textarea);
              $(textarea).hide().removeClass('visually-hidden');

              // Tabindex + 2 accounts for the CodeMirror's iframe.
              $tabbable.eq(tabindex + 2).focus();
            }

          }
        }, Drupal.webform.codeMirror.options);

        var editor = CodeMirror.fromTextArea(this, options);

        // Now, close details.
        $details.removeAttr('open');

        // Issue #2764443: CodeMirror is not setting submitted value when
        // rendered within a webform UI dialog.
        editor.on('blur', function (event) {
          editor.save();
        });

        // Update CodeMirror when the textarea's value has changed.
        // @see webform.states.js
        $input.on('change', function () {
          editor.getDoc().setValue($input.val());
        });

        // Set CodeMirror to be readonly when the textarea is disabled.
        // @see webform.states.js
        $input.on('webform:disabled', function () {
          editor.setOption('readOnly', $input.is(':disabled'));
        });

        // Delay refreshing CodeMirror for 10 millisecond while the dialog is
        // still being rendered.
        // @see http://stackoverflow.com/questions/8349571/codemirror-editor-is-not-loading-content-until-clicked
        setTimeout(function () {
          // Show tab panel and open details.
          var $tabPanel = $input.parents('.ui-tabs-panel:hidden');
          var $details = $input.parents('details:not([open])');

          if (!$tabPanel.length && $details.length) {
            return;
          }

          $tabPanel.show();
          $details.attr('open', 'open');

          editor.refresh();

          // Hide tab panel and close details.
          $tabPanel.hide();
          $details.removeAttr('open');
        }, 10);
      });

      // Webform CodeMirror syntax coloring.
      $(context).find('.js-webform-codemirror-runmode').once('webform-codemirror-runmode').each(function () {
        // Mode Runner - http://codemirror.net/demo/runmode.html
        CodeMirror.runMode($(this).addClass('cm-s-default').text(), $(this).attr('data-webform-codemirror-mode'), this);
      });
    }
  };

})(jQuery, Drupal);
;
// CodeMirror, copyright (c) by Marijn Haverbeke and others
// Distributed under an MIT license: https://codemirror.net/LICENSE

(function(mod) {
  if (typeof exports == "object" && typeof module == "object") // CommonJS
    mod(require("../../lib/codemirror"),  require("../../addon/mode/multiplex"));
  else if (typeof define == "function" && define.amd) // AMD
    define(["../../lib/codemirror", "../../addon/mode/multiplex"], mod);
  else // Plain browser env
    mod(CodeMirror);
})(function(CodeMirror) {
  "use strict";

  CodeMirror.defineMode("twig:inner", function() {
    var keywords = ["and", "as", "autoescape", "endautoescape", "block", "do", "endblock", "else", "elseif", "extends", "for", "endfor", "embed", "endembed", "filter", "endfilter", "flush", "from", "if", "endif", "in", "is", "include", "import", "not", "or", "set", "spaceless", "endspaceless", "with", "endwith", "trans", "endtrans", "blocktrans", "endblocktrans", "macro", "endmacro", "use", "verbatim", "endverbatim"],
        operator = /^[+\-*&%=<>!?|~^]/,
        sign = /^[:\[\(\{]/,
        atom = ["true", "false", "null", "empty", "defined", "divisibleby", "divisible by", "even", "odd", "iterable", "sameas", "same as"],
        number = /^(\d[+\-\*\/])?\d+(\.\d+)?/;

    keywords = new RegExp("((" + keywords.join(")|(") + "))\\b");
    atom = new RegExp("((" + atom.join(")|(") + "))\\b");

    function tokenBase (stream, state) {
      var ch = stream.peek();

      //Comment
      if (state.incomment) {
        if (!stream.skipTo("#}")) {
          stream.skipToEnd();
        } else {
          stream.eatWhile(/\#|}/);
          state.incomment = false;
        }
        return "comment";
      //Tag
      } else if (state.intag) {
        //After operator
        if (state.operator) {
          state.operator = false;
          if (stream.match(atom)) {
            return "atom";
          }
          if (stream.match(number)) {
            return "number";
          }
        }
        //After sign
        if (state.sign) {
          state.sign = false;
          if (stream.match(atom)) {
            return "atom";
          }
          if (stream.match(number)) {
            return "number";
          }
        }

        if (state.instring) {
          if (ch == state.instring) {
            state.instring = false;
          }
          stream.next();
          return "string";
        } else if (ch == "'" || ch == '"') {
          state.instring = ch;
          stream.next();
          return "string";
        } else if (stream.match(state.intag + "}") || stream.eat("-") && stream.match(state.intag + "}")) {
          state.intag = false;
          return "tag";
        } else if (stream.match(operator)) {
          state.operator = true;
          return "operator";
        } else if (stream.match(sign)) {
          state.sign = true;
        } else {
          if (stream.eat(" ") || stream.sol()) {
            if (stream.match(keywords)) {
              return "keyword";
            }
            if (stream.match(atom)) {
              return "atom";
            }
            if (stream.match(number)) {
              return "number";
            }
            if (stream.sol()) {
              stream.next();
            }
          } else {
            stream.next();
          }

        }
        return "variable";
      } else if (stream.eat("{")) {
        if (stream.eat("#")) {
          state.incomment = true;
          if (!stream.skipTo("#}")) {
            stream.skipToEnd();
          } else {
            stream.eatWhile(/\#|}/);
            state.incomment = false;
          }
          return "comment";
        //Open tag
        } else if (ch = stream.eat(/\{|%/)) {
          //Cache close tag
          state.intag = ch;
          if (ch == "{") {
            state.intag = "}";
          }
          stream.eat("-");
          return "tag";
        }
      }
      stream.next();
    };

    return {
      startState: function () {
        return {};
      },
      token: function (stream, state) {
        return tokenBase(stream, state);
      }
    };
  });

  CodeMirror.defineMode("twig", function(config, parserConfig) {
    var twigInner = CodeMirror.getMode(config, "twig:inner");
    if (!parserConfig || !parserConfig.base) return twigInner;
    return CodeMirror.multiplexingMode(
      CodeMirror.getMode(config, parserConfig.base), {
        open: /\{[{#%]/, close: /[}#%]\}/, mode: twigInner, parseDelimiters: true
      }
    );
  });
  CodeMirror.defineMIME("text/x-twig", "twig");
});
;
/**
 * @file
 * JavaScript behaviors for options (admin) elements.
 */

(function ($, Drupal) {

  'use strict';


  /**
   * Attach handlers to options (admin) element.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformOptionsAdmin = {
    attach: function (context) {
      $(context).find('.js-webform-options-sync').once('webform-options-sync').each(function () {
        // Target input name and not id because the id will be changing via
        // Ajax callbacks.
        var name = this.name;

        var $value = $(this);
        var $text = $('input[name="' + name.replace(/\[value\]$/, '[text]') + '"]');

        // On focus, determine if option value and option text are in-sync.
        $value.on('focus', function () {
          var sync = $value.val() === $text.val();
          $value.data('webform_options_sync', sync);
          if (sync) {
            $text.prop('readonly', true).closest('.js-form-item, .js-form-wrapper').addClass('webform-readonly');
          }
        });

        // On blur, if option value and option text are in-sync remove readonly.
        $value.on('blur', function () {
          if ($value.data('webform_options_sync')) {
            $text.prop('readonly', false).closest('.js-form-item, .js-form-wrapper').removeClass('webform-readonly');
          }
        });

        // On keyup, if option value and option text are in-sync then set
        // option text to option value.
        $value.on('keyup', function () {
          if ($value.data('webform_options_sync')) {
            $text.val($value.val());
          }
        });

      });
    }
  };


})(jQuery, Drupal);
;
/**
 * @file
 * JavaScript behaviors for multiple element.
 */

(function ($, Drupal) {

  'use strict';

  /**
   * Move show weight to after the table.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformMultipleTableDrag = {
    attach: function (context, settings) {
      for (var base in settings.tableDrag) {
        if (settings.tableDrag.hasOwnProperty(base)) {
          $(context).find('.js-form-type-webform-multiple #' + base).once('webform-multiple-table-drag').each(function () {
            var $tableDrag = $(this);
            var $toggleWeight = $tableDrag.prev().prev('.tabledrag-toggle-weight-wrapper');
            if ($toggleWeight.length) {
              $toggleWeight.addClass('webform-multiple-tabledrag-toggle-weight');
              $tableDrag.after($toggleWeight);
            }
          });
        }
      }
    }
  };

  /**
   * Submit multiple add number input value when enter is pressed.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.webformMultipleAdd = {
    attach: function (context, settings) {
      $(context).find('.js-webform-multiple-add').once('webform-multiple-add').each(function () {
        var $submit = $(this).find('input[type="submit"], button');
        var $number = $(this).find('input[type="number"]');
        $number.keyup(function (event) {
          if (event.which === 13) {
            // Note: Mousedown is the default trigger for Ajax events.
            // @see Drupal.Ajax.
            $submit.mousedown();
          }
        });
      });
    }
  };

})(jQuery, Drupal);
;
