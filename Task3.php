<!-- using class and constructor -->
<?php
 $content = '<div class="quote">
 AIMS: To compare the effect of the direct renin inhibitor aliskiren on neurohumoral activity in heart failure patients treated with low-dose and high-dose ACE inhibitor.
  
	<br><br>METHODS: A retrospective analysis of the ALOFT trial. Comparison of the effects of 6 months treatment with aliskiren (versus placebo) in patients receiving &lt;guideline-recommended dose of ACE inhibitor (n&thinsp;=&thinsp;109) with those receiving ≥ recommended-dose (n&thinsp;=&thinsp;81). Neurohumoral measures included B-type natriuretic peptide (BNP), NT proBNP, plasma renin activity and urinary aldosterone excretion.
  
	<br><br>RESULTS: Patients in each ACE inhibitor-dose group were generally similar (those in the ≥recommended ACE inhibitor-dose had higher baseline blood-pressures and LVEF and were more often female and diabetic). In the &lt;recommended-dose sub-group, the reduction in BNP from baseline to end-of-study was -1% (95% CI -32 to +44%) in the placebo-group and -32% (<-1 to -53%) in the aliskiren group. The corresponding reductions in the ≥recommended ACE inhibitor-dose sub-group were: placebo -19% (-46 to +22%) and aliskiren -46% (-22 to -62%); interaction p-value 0.94. The pattern of results for other neurohumoral markers was similar.
  
	<br><br>CONCLUSIONS: Aliskiren causes neurohumoral suppression in heart failure, even in patients treated with ≥recommended-dose of ACE inhibitor.
	<br><br>
  </div>';
//   class to replace content
  class replaceContent{
    private $originalContent;
    private $patterns = array();
    private $replacements = array();
    //  constructor for geting value of content
    public function __construct($originalContent){
		$this->originalContent = $originalContent;
      }
      // function for regex pattern
        function addPatterns($pattern){
            array_push ($this->patterns, $pattern );
        }
        //function for replacement (new style)
        function addReplacement($replacement){
            array_push ($this->replacements, $replacement  );
        }
        // function to replace content
       function replace(){
        ksort($this->patterns);
        ksort($this->replacements);
        return preg_replace($this->patterns, $this->replacements, $this->originalContent);
       }
    }
    $ReplaceContent = new replaceContent($content); 
    $ReplaceContent -> addPatterns('/[-+]?([0-9]*\.[0-9]+|[0-9]+%?)/');
    $ReplaceContent -> addPatterns('/(ACE)/i');
    $ReplaceContent -> addPatterns('/(dose)/i');
    $ReplaceContent -> addReplacement('<span style="box-shadow: inset 0 -4px  #9fdcf6 ; font-weight: bold; line-height:1.6em " >${1}</span>');
    $ReplaceContent -> addReplacement('<span style="box-shadow: inset 0 -4px  #78debf ; font-weight: bold; line-height:1.6em " >${1}</span>');
    $ReplaceContent -> addReplacement('<span style="box-shadow: inset 0 -4px  #997450 ; font-weight: bold; line-height:1.6em " >${1}</span>');
    $newContent = $ReplaceContent -> replace();
?>
<html>
    <head>
        <title> New content </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $newContent; ?>
                </div>
            </div>
        </div>
    </body>
</html>