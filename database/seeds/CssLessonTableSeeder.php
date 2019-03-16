<?php

use Illuminate\Database\Seeder;
use \App\Lesson;
use \App\Code;

class CssLessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $admin = \App\Admin::first()->id;

		$css1 = Lesson::create([
			'admin_id' => $admin,
			'course_id' => 2,
			'title' => 'CSS Introduction',
			'slug' => 'css_introduction',
		]);

		Code::create([
		'course_id' => 2,
		'lesson_id' => $css1->id,
		'heading' => 'What is CSS?',
		'heading_body' => '<p>Cascading Style Sheets, fondly referred to as CSS, is a simple design language intended to simplify the process of making web pages presentable.</p>
		<br>
		<p>CSS handles the look and feel part of a web page. Using CSS, you can control the color of the text, the style of fonts, the spacing between paragraphs, how columns are sized and laid out, what background images or colors are used, layout designs,variations in display for different devices and screen sizes as well as a variety of other effects.</p>
		<br>
		<p>CSS is easy to learn and understand but it provides powerful control over the presentation of an HTML  document. Most commonly, CSS is combined with the markup languages HTML or XHTML.</p>',
		'html_code' => '',
		'css_code' => '',
		'javascript_code' => ''

		]);



		Code::create([
			'course_id' => 2,
			'lesson_id' => $css1->id,
			'heading' => 'Advantages of CSS',
			'heading_body' => '<ul>
			<li><p><b>CSS saves time</b> &minus; You can write CSS once and then reuse same sheet in multiple HTML pages. You can define a style for each HTML element and apply it to as many Web pages as you want.</p></li>
			<li><p><b>Pages load faster</b> &minus; If you are using CSS, you do not need to write HTML tag attributes every time. Just write one CSS rule of a tag and apply it to all the occurrences of that tag. So less code means faster download times.</p></li>
			<li><p><b>Easy maintenance</b> &minus; To make a global change, simply change the style, and all elements in all the web pages will be updated automatically.</p></li>
			<li><p><b>Superior styles to HTML</b> &minus; CSS has a much wider array of attributes than HTML, so you can give a far better look to your HTML page in comparison to HTML attributes.</p></li>
			<li><p><b>Multiple Device Compatibility</b> &minus; Style sheets allow content to be optimized for more than one type of device. By using the same HTML document, different versions of a website can be presented for handheld devices such as PDAs and cell phones or for printing.</p></li>
			<li><p><b>Global web standards</b> &minus; Now HTML attributes are being deprecated and it is being recommended to use CSS. So its a good idea to start using CSS in all the HTML pages to make them compatible to future browsers.</p></li>
			</ul>',
			'html_code' => '',
			'css_code' => '',
			'javascript_code' => ''

		]);




		Code::create([
			'course_id' => 2,
			'lesson_id' => $css1->id,
			'heading' => 'Who Creates and Maintains CSS?',
			'heading_body' => '<p>CSS is created and maintained through a group of people within the W3C called the CSS Working Group. The CSS Working Group creates documents called specifications. When a specification has been discussed and officially ratified by the W3C members, it becomes a recommendation.</p>
			<br>
			<p>These ratified specifications are called recommendations because the W3C has no control over the actual implementation of the language. Independent companies and organizations create that software.</p>
			<br>
			<p><b>NOTE:</b> The World Wide Web Consortium, or W3C is a group that makes recommendations about how the Internet works and how it should evolve.</p>',
			'html_code' => '',
			'css_code' => '',
			'javascript_code' => ''

		]);



		Code::create([
		'course_id' => 2,
		'lesson_id' => $css1->id,
		'heading' => 'CSS Versions',
		'heading_body' => '<p>CSS1 came out of W3C as a recommendation in December 1996. This version describes the CSS language as well as a simple visual formatting model for all the HTML tags.</p>
		<br>
		<p>CSS2 became a W3C recommendation in May 1998 and builds on CSS1. This version adds support for media-specific style sheets e.g. printers and aural devices, downloadable fonts, element positioning and tables.</p>',
		'html_code' => '',
		'css_code' => '',
		'javascript_code' => ''

		 ]);


		$css2 = Lesson::create([
			'admin_id' => $admin,
			'course_id' => 2,
			'course_id' => 2,
			'title' => 'CSS Syntax',
			'slug' => 'css_syntax',
		]);

		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => 'CSS Syntax',
		'heading_body' => '<p>A CSS comprises of style rules that are interpreted by the browser and then applied to the corresponding elements in your document. A style rule is made of three parts &minus;</p>
		<ul>
		<li><p><b>Selector</b> &minus; A selector is an HTML tag at which a style will be applied. This could be any tag like &lt;h1&gt; or &lt;table&gt; etc.</p></li>
		<li><p><b>Property</b> &minus; A property is a type of attribute of HTML tag. Put simply, all the HTML attributes are converted into CSS properties. They could be <i>color</i>, <i>border</i> etc.</p></li>
		<li><p><b>Value</b> &minus; Values are assigned to properties. For example, <i>color</i> property can have value either <i>red</i> or <i>#F1F1F1</i> etc.</p></li>
		</ul>
		<br>
		<p> Here table is a selector and border is a property and given value 1px solid #C00 is the value of that property.</p><br>
		<div class="alert alert-dark" role="alert">
		  <pre>table{ border :1px solid #C00; }</pre>
		</div>
		',
		'html_code' => '',
		'css_code' => '',
		'javascript_code' => ''

		 ]);




		Code::create([
			'course_id' => 2,
			'lesson_id' => $css2->id,
			'heading' => 'The Type Selectors',
			'heading_body' => '<p>This is the same selector we have seen above. Again, one more example to give a color to all level 1 headings.</p><br>
		<div class="alert alert-dark" role="alert">
		  <pre>h1 {
  color: #36CFFF; 
}</pre>
		</div>',
			'html_code' => '',
			'css_code' => '',
			'javascript_code' => ''

		]);	



		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => 'The Universal Selectors',
		'heading_body' => '<p>Rather than selecting elements of a specific type, the universal selector quite simply matches the name of any element type</p><br>
		<div class="alert alert-dark" role="alert">
		  <pre>* {
   color: #000000; 
}</pre>
		</div>',
		'html_code' => '',
		'css_code' => '',
		'javascript_code' => ''

		]);



		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => 'The Descendant Selectors',
		'heading_body' => '<p>Suppose you want to apply a style rule to a particular element only when it lies inside a particular element. As given in the following example, style rule will apply to &lt;em&gt; element only when it lies inside &lt;ul&gt; tag.</p><br>
		<div class="alert alert-dark" role="alert">
		  <pre>ul em {
  color: #000000; 
}</pre>
		</div>',
		'html_code' => '',
		'css_code' => '',
		'javascript_code' => ''
		 ]);


		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => 'The Class Selectors',
		'heading_body' => '<p>You can define style rules based on the class attribute of the elements. All the elements having that class will be formatted according to the defined rule.</p><br>
		<div class="alert alert-dark" role="alert">
		  <pre>.black {
   color: #000000; 
}</pre>
		</div><br><p>This rule renders the content in black for every element with class attribute set to black in our document. You can make it a bit more particular. For example </p><br><div class="alert alert-dark" role="alert">
		  <pre>h1.black {
   color: #000000; 
}</pre>
		</div><br><p>This rule renders the content in black for only &lt;h1&gt; elements with class attribute set to black. You can apply more than one class selectors to given element. Consider the following example </p><div class="alert alert-dark" role="alert">
		  <pre>&lt;p&gt; class = "center bold"&gt;
   This para will be styled by the classes center and bold.
&lt;/p&gt;</pre>
		</div>',
		'html_code' => '',
		'css_code' => '',
		'javascript_code' => ''
		 ]);


		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => 'The ID Selectors',
		'heading_body' => '<p>You can define style rules based on the id attribute of the elements. All the elements having that id will be formatted according to the defined rule.</p><div class="alert alert-dark" role="alert">
		  <pre>#black {
   color: #000000; 
}</pre>
		</div><br><p>This rule renders the content in black for every element with id attribute set to black in our document. You can make it a bit more particular. For example</p><br><div class="alert alert-dark" role="alert">
		  <pre>h1#black {
   color: #000000; 
}</pre>
		</div><br><p>This rule renders the content in black for only &lt;h1&gt; elements with id attribute set to black.</p>
		<br>
		<p>The true power of id selectors is when they are used as the foundation for descendant selectors, For example</p>
		<br>
		<p>In this example all level 2 headings will be displayed in black color when those headings will lie with in tags having id attribute set to black.</p><div class="alert alert-dark" role="alert">
		  <pre>#black h2 {
   color: #000000; 
}</pre>
		</div>',
		'html_code' => '',
		'css_code' => '',
		'javascript_code' => ''
		 ]);

		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => 'The Child Selectors',
		'heading_body' => '<p>You have seen the descendant selectors. There is one more type of selector, which is very similar to descendants but have different functionality. Consider the following example</p>
		<div class="alert alert-dark" role="alert">
		  <pre>
body > p {
   color: #000000; 
}
		  </pre>
		</div><br><p>This rule will render all the paragraphs in black if they are direct child of &lt;body&gt; element. Other paragraphs put inside other elements like &lt;div&gt; or &lt;td&gt; would not have any effect of this rule.</p>

		',
		'html_code' => '',
		'css_code' => '',
		'javascript_code' => ''
		 ]);

		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => 'The Attribute Selectors',
		'heading_body' => '<p>You can also apply styles to HTML elements with particular attributes. The style rule below will match all the input elements having a type attribute with a value of text</p>
<div class="alert alert-dark" role="alert">
		  <pre>
input[type = "text"] {
   color: #000000; 
}
</pre>
		  </div>
		<p>The advantage to this method is that the &lt;input type = "submit" /&gt; element is unaffected, and the color applied only to the desired text fields.</p>
		<p>There are following rules applied to attribute selector.</p>
		<ul>
		<li><p><b>p[lang]</b> &minus; Selects all paragraph elements with a <i>lang</i> attribute.</p></li>
		<li><p><b>p[lang="fr"]</b> &minus; Selects all paragraph elements whose <i>lang</i> attribute has a value of exactly "fr".</p></li>
		<li><p><b>p[lang~="fr"]</b> &minus; Selects all paragraph elements whose <i>lang</i> attribute contains the word "fr".</p></li>
		<li><p><b>p[lang|="en"]</b> &minus; Selects all paragraph elements whose <i>lang</i> attribute contains values that are exactly "en", or begin with "en-".</p></li>',
		'html_code' => '',
		'css_code' => '',
		'javascript_code' => ''
		 ]);

		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => 'Multiple Style Rules',
		'heading_body' => '<p>You may need to define multiple style rules for a single element. You can define these rules to combine multiple properties and corresponding values into a single block as defined in the following example</p>',
		'html_code' => '',
		'css_code' => 'h1 {
		   color: #36C;
		   font-weight: normal;
		   letter-spacing: .4em;
		   margin-bottom: 1em;
		   text-transform: lowercase;
		}',
		'javascript_code' => ''
		 ]);



		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => '',
		'heading_body' => '<p>Here all the property and value pairs are separated by a <b>semicolon (;)</b>. You can keep them in a single line or multiple lines. For better readability, we keep them in separate lines.</p>
		<p>For a while, don\'t bother about the properties mentioned in the above block. These properties will be explained in the coming chapters and you can find complete detail about properties in CSS References</p>',
		'html_code' => '',
		'css_code' => 'h1 {
		   color: #36C;
		   font-weight: normal;
		   letter-spacing: .4em;
		   margin-bottom: 1em;
		   text-transform: lowercase;
		}',
		'javascript_code' => ''
		 ]);



		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => 'Grouping Selectors',
		'heading_body' => '<p>You can apply a style to many selectors if you like. Just separate the selectors with a comma, as given in the following example</p>',
		'html_code' => '',
		'css_code' => 'h1, h2, h3 {
		   color: #36C;
		   font-weight: normal;
		   letter-spacing: .4em;
		   margin-bottom: 1em;
		   text-transform: lowercase;
		}',
		'javascript_code' => ''
		 ]);



		Code::create([
		'course_id' => 2,
		'lesson_id' => $css2->id,
		'heading' => '',
		'heading_body' => '<p>This define style rule will be applicable to h1, h2 and h3 element as well. The order of the list is irrelevant. All the elements in the selector will have the corresponding declarations applied to them.</p>\',
		<br>
		<p>You can combine the various id selectors together as shown below</p>',
		'html_code' => '',
		'css_code' => '#content, #footer, #supplement {
		   position: absolute;
		   left: 510px;
		   width: 200px;
		}',
		'javascript_code' => ''
		 ]);


$css3 = Lesson::create([
'admin_id' => $admin,
'course_id' => 2,
'title' => 'CSS Inclusion',
'slug' => 'css_inclusion',
]);

Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => '',
'heading_body' => '<p>There are four ways to associate styles with your HTML document. Most commonly used methods are inline CSS and External CSS.</p>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Embedded CSS - The <style> element',
'heading_body' => '<p>You can put your CSS rules into an HTML document using the &lt;style&gt; element. This tag is placed inside the <head>...</head> tags. Rules defined using this syntax will be applied to all the elements available in the document. Here is the generic syntax</p>',
'html_code' => '<!DOCTYPE html>
<html>
   <head>
      <style type = "text/css" media = "all">
         body {
            background-color: linen;
         }
         h1 {
            color: maroon;
            margin-left: 40px;
         }
      </style>
   </head>   
   <body>
      <h1>This is a heading</h1>
      <p>This is a paragraph.</p>
   </body>
</html>',
'css_code' => '',
'javascript_code' => '', ]);



Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Attributes',
'heading_body' => '<p>Attributes associated with &lt;style&gt; elements are:</p>
<br>
<table class>
<tr>
<th style="text-align:center;">Attribute</th>
<th style="text-align:center;">Value</th>
<th style="text-align:center;">Description</th>
</tr>
<tr>
<td class>type</td>
<td class>text/css</td>
<td>Specifies the style sheet language as a content-type (MIME type). This is required attribute.</td>
</tr>
<tr>
<td class>media</td>
<td><p>screen</p>
<p>tty</p>
<p>tv</p>
<p>projection</p>
<p>handheld</p>
<p>print</p>
<p>braille</p>
<p>aural</p>
<p>all</p>
</td>
<td style="vertical-align:middle;">Specifies the device the document will be displayed on. Default value is <i>all</i>. This is an optional attribute.</td>
</tr>
</table>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Inline CSS - The syle attribute',
'heading_body' => '<p>You can use style attribute of any HTML element to define style rules. These rules will be applied to that element only. Here is the generic syntax</p>',
'html_code' => '',
'css_code' => '<element style = "...style rules....">',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Attributes',
'heading_body' => '<table class>
<tr>
<th style="text-align:center;">Attribute</th>
<th style="text-align:center;width:15%">Value</th>
<th style="text-align:center;">Description</th>
</tr>
<tr>
<td class>style</td>
<td class>style rules</td>
<td>The value of <i>style</i> attribute is a combination of style declarations separated by semicolon (;).</td>
</tr>
</table>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Example',
'heading_body' => '<p>Following is the example of inline CSS based on the above syntax</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
   </head>

   <body>
      <h1 style = "color:#36C;"> 
         This is inline CSS 
      </h1>
   </body>
</html>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'External CSS - The <link> Element',
'heading_body' => '<p>The <link> element can be used to include an external stylesheet file in your HTML document.</p>
<br>
<p>An external style sheet is a separate text file with .css extension. You define all the Style rules within this text file and then you can include this file in any HTML document using <link> element.</p>
<br>
<p>Here is the generic syntax of including external CSS file</p>',
'html_code' => '',
'css_code' => '<head>
   <link type = "text/css" href = "..." media = "..." />
</head>',
'javascript_code' => '', ]);



Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Attributes',
'heading_body' => '<p>Attributes associated with &lt;style&gt; elements are</p>
<br>
<table class="table table-bordered">
<tr>
<th style="text-align:center; width:15%;">Attribute</th>
<th style="text-align:center; width:20%;">Value</th>
<th style="text-align:center;">Description</th>
</tr>
<tr>
<td class="ts">type</td>
<td style="vertical-align:middle;">text css</td>
<td>Specifies the style sheet language as a content-type (MIME type). This attribute is required.</td>
</tr>
<tr>
<td class="ts">href</td>
<td style="vertical-align:middle;">URL</td>
<td>Specifies the style sheet file having Style rules. This attribute is a required.</td>
</tr>
<tr>
<td class="ts">media</td>
<td>
<p>screen</p>
<p>tty</p>
<p>tv</p>
<p>projection</p>
<p>handheld</p>
<p>print</p>
<p>braille</p>
<p>aural</p>
<p>all</p>
</td>
<td style="vertical-align:middle;">Specifies the device the document will be displayed on. Default value is <i>all</i>. This is optional attribute.</td>
</tr>
</table>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Example',
'heading_body' => '<p>Consider a simple style sheet file with a name mystyle.css having the following rules</p>',
'html_code' => '',
'css_code' => 'h1, h2, h3 {
   color: #36C;
   font-weight: normal;
   letter-spacing: .4em;
   margin-bottom: 1em;
   text-transform: lowercase;
}',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => '',
'heading_body' => '<p>Now you can include this file mystyle.css in any HTML document as follows</p>',
'html_code' => '',
'css_code' => '<head>
   <link type = "text/css" href = "mystyle.css" media = " all" />
</head>',
'javascript_code' => '', ]);



Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Imported CSS - @import Rule',
'heading_body' => '<p>@import is used to import an external stylesheet in a manner similar to the <link> element. Here is the generic syntax of @import rule.</p>',
'html_code' => '',
'css_code' => '<head>
   <@import "URL";
</head>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => '',
'heading_body' => '<p>Here URL is the URL of the style sheet file having style rules. You can use another syntax as well</p>',
'html_code' => '',
'css_code' => '<head>
   <@import url("URL");
</head>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Example',
'heading_body' => '<p>Following is the example showing you how to import a style sheet file into HTML document</p>',
'html_code' => '',
'css_code' => '<head>
   @import "mystyle.css";
</head>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'CSS Rules Overriding',
'heading_body' => '<p>We have discussed four ways to include style sheet rules in a an HTML document. Here is the rule to override any Style Sheet Rule.</p>
<br>
<ul>
<li><p>Any inline style sheet takes highest priority. So, it will override any rule defined in &lt;style&gt;...&lt;/style&gt; tags or rules defined in any external style sheet file.</p></li>
<li><p>Any rule defined in &lt;style&gt;...&lt;/style&gt; tags will override rules defined in any external style sheet file.</p></li>
<li><p>Any rule defined in external style sheet file takes lowest priority, and rules defined in this file will be applied only when above two rules are not applicable.</p></li>
</ul>',
'html_code' => '',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'Handling Old Browser',
'heading_body' => '<p>There are still many old browsers who do not support CSS. So, we should take care while writing our Embedded CSS in an HTML document. The following snippet shows how you can use comment tags to hide CSS from older browsers</p>',
'html_code' => '',
'css_code' => '<style type = "text/css">
   <!--
      body, td {
         color: blue;
      }
   -->
</style>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css3 ->id,
'heading' => 'CSS Comments',
'heading_body' => '<p>Many times, you may need to put additional comments in your style sheet blocks. So, it is very easy to comment any part in style sheet. You can simple put your comments inside /*.....this is a comment in style sheet.....*/.</p>
<br>
<p>You can use /* ....*/ to comment multi-line blocks in similar way you do in C and C++ programming languages.</p>',
'html_code' => '<!DOCTYPE html>
<html>
   <head>
      <style>
         p {
            color: red;
            /* This is a single-line comment */
            text-align: center;
         }
         /* This is a multi-line comment */
      </style>
   </head>

   <body>
      <p>Hello World!</p>
   </body>
</html>',
'css_code' => '',
'javascript_code' => '', ]);


$css4 = Lesson::create([
'admin_id' => $admin,
'course_id' => 2,
'title' => 'CSS Measurement 
Units',
'slug' => 'css_measurementunits',
]);

Code::create([
'course_id' => 2,
'lesson_id' => $css4 ->id,
'heading' => '',
'heading_body' => '<p>Before we start the actual exercise, we would like to give a brief idea about the CSS Measurement Units. CSS supports a number of measurements including absolute units such as inches, centimeters, points, and so on, as well as relative measures such as percentages and em units. You need these values while specifying various measurements in your Style rules e.g. border = "1px solid red".</p>
<br>
<p>We have listed out all the CSS Measurement Units along with proper Examples<p>
<br>
<table>
<tr>
<th style="text-align:center;width:10%">Unit</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;width:30%">Example</th>
</tr>
<tr>
<td>%</td>
<td>Defines a measurement as a percentage relative to another value, typically an enclosing element.</td>	
<td>p {font-size: 16pt; line-height: 125%;}</td>	
</tr>	 
<tr>
<td>cm</td>
<td style="vertical-align:middle;">Defines a measurement in centimeters.</td>		
<td>div {margin-bottom: 2cm;}</td>	
</tr>	
<tr>
<td>em</td>
<td>A relative measurement for the height of a font in em spaces. Because an em unit is equivalent to the size of a given font, if you assign a font to 12pt, each &quot;em&quot; unit would be 12pt; thus, 2em would be 24pt.</td>
<td style="vertical-align:middle;">p {letter-spacing: 7em;}</td>		
</tr>	 
<tr>
<td>ex</td>
<td>This value defines a measurement relative to a font\'s x-height. The x-height is determined by the height of the font\'s lowercase letter x.</td>		
<td style="vertical-align:middle;">p {font-size: 24pt; line-height: 3ex;}</td>	
</tr>		
<tr>
<td>in</td>
<td style="vertical-align:middle;">Defines a measurement in inches.</td>		
<td>p {word-spacing: .15in;}</td>	
</tr>	 
<tr>
<td>mm</td>
<td style="vertical-align:middle;">Defines a measurement in millimeters.</td>		
<td>p {word-spacing: 15mm;}</td>	
</tr>		
<tr>
<td>pc</td>
<td>Defines a measurement in picas. A pica is equivalent to 12 points; thus, there are 6 picas per inch.</td>		
<td style="vertical-align:middle;">p {font-size: 20pc;}</td>	
</tr>	 
<tr>
<td>pt</td>
<td>Defines a measurement in points. A point is defined as 1/72nd of an inch.</td>		
<td>body {font-size: 18pt;}</td>	
</tr>	
<tr>
<td>px</td>
<td>Defines a measurement in screen pixels.</td>		
<td>p {padding: 25px;}</td>	
</tr>
<!--<tr>
<td>vh</td>
<td style="vertical-align:middle;">1% of viewport height.</td>		
<td>h2 {
  font-size: 3.0vh;
}</td>	
</tr>
<tr>
<td class="ts">vw</td>
<td style="vertical-align:middle;">1% of viewport width</td>
<td>h1 {
  font-size: 5.9vw;
}</td>
</tr>
<tr>
<td class="ts">vmin</td>
<td>1vw or 1vh, whichever is smaller</td>
<td>p { font-size: 2vmin;}</td>
</tr>-->
</table>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);



$css5 = Lesson::create([
'admin_id' => $admin,
'course_id' => 2,
'title' => 'CSS Colors',
'slug' => 'css_colors',
]);

Code::create([
'course_id' => 2,
'lesson_id' => $css5 ->id,
'heading' => '',
'heading_body' => '<p>CSS uses color values to specify a color. Typically, these are used to set a color either for the foreground of an element (i.e., its text) or else for the background of the element. They can also be used to affect the color of borders and other decorative effects.</p>
<br>
<p>You can specify your color values in various formats. Following table lists all the possible formats</p>
<br>
<table style="text-align:center;">
<tr>
<th style="text-align:center;">Format</th>
<th style="text-align:center;">Syntax</th>
<th style="text-align:center;">Example</th>
</tr>
<tr>
<td>Hex Code</td>
<td>#RRGGBB</td>	
<td>p{color:#FF0000;}</td>	
</tr>
<tr>
<td>Short Hex Code</td>
<td>#RGB</td>	
<td>p{color:#6A7;}</td>	
</tr>	
<tr>
<td>RGB %</td>
<td>rgb(rrr%,ggg%,bbb%)</td>	
<td>p{color:rgb(50%,50%,50%);}</td>	
</tr>
<tr>
<td>RGB Absolute</td>
<td>rgb(rrr,ggg,bbb)</td>	
<td>p{color:rgb(0,0,255);}</td>	
</tr>
<tr>
<td>keyword</td>
<td>aqua, black, etc.</td>	
<td>p{color:teal;}</td>	
</tr>
</table>
<br>
<p>These formats are explained in more detail in the following sections &minus;</p>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css5 ->id,
'heading' => 'CSS Colors - Hex Code',
'heading_body' => '<p>A hexadecimal is a 6 digit representation of a color. The first two digits(RR) represent a red value, the next two are a green value(GG), and the last are the blue value(BB).</p>
<br>
<p>A hexadecimal value can be taken from any graphics software like Adobe Photoshop, Jasc Paintshop Pro, or even using Advanced Paint Brush.</p>
<br>
<p>Each hexadecimal code will be preceded by a pound or hash sign \'#\'. Following are the examples to use Hexadecimal notation.</p>
<br>
<table>
<tr>
<th style="text-align:center;width:50%">Color</th>
<th style="text-align:center;width:50%">Color HEX</th>
</tr>
<tr>
<td bgcolor="#000000">&nbsp;</td>
<td style="text-align:center;">#000000</td> 
</tr>
<tr>
<td bgcolor="#ff0000">&nbsp;</td>
<td style="text-align:center;">#FF0000</td>
</tr>
<tr>
<td bgcolor="#00ff00">&nbsp;</td>
<td style="text-align:center;">#00FF00</td>
</tr>
<tr>
<td bgcolor="#0000ff">&nbsp;</td>
<td style="text-align:center;">#0000FF</td>
</tr>
<tr>
<td bgcolor="#ffff00">&nbsp;</td>
<td style="text-align:center;">#FFFF00</td>
</tr>
<tr>
<td bgcolor="#00ffff">&nbsp;</td>
<td style="text-align:center;">#00FFFF</td>
</tr>
<tr>
<td bgcolor="#ff00ff">&nbsp;</td>
<td style="text-align:center;">#FF00FF</td>
</tr>
<tr>
<td bgcolor="#c0c0c0">&nbsp;</td>
<td style="text-align:center;">#C0C0C0</td>
</tr>
<tr>
<td bgcolor="#ffffff">&nbsp;</td>
<td style="text-align:center;">#FFFFFF</td>
</tr>
</table>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css5 ->id,
'heading' => 'CSS Colors - RGB Values',
'heading_body' => '<p>This color value is specified using the rgb( ) property. This property takes three values, one each for red, green, and blue. The value can be an integer between 0 and 255 or a percentage.</p>
<br>
<p>NOTE - All the browsers does not support rgb() property of color so it is recommended not to use it.</p>
<br>
<br>Following is the example to show few colors using RGB values.</p>
<br>
<table>
<tr>
<th style="text-align:center;width:50%">Color</th>
<th style="text-align:center;width:50%">Color RGB</th>
</tr>
<tr>
<td bgcolor="#000000">&nbsp;</td>
<td style="text-align:center;">rgb(0,0,0)</td>
</tr>
<tr>
<td bgcolor="#ff0000">&nbsp;</td>
<td style="text-align:center;">rgb(255,0,0)</td>
</tr>
<tr>
<td bgcolor="#00ff00">&nbsp;</td>
<td style="text-align:center;">rgb(0,255,0)</td>
</tr>
<tr>
<td bgcolor="#0000ff">&nbsp;</td>
<td style="text-align:center;">rgb(0,0,255)</td>
</tr>
<tr>
<td bgcolor="#ffff00">&nbsp;</td>
<td style="text-align:center;">rgb(255,255,0)</td>
</tr>
<tr>
<td bgcolor="#00ffff">&nbsp;</td>
<td style="text-align:center;">rgb(0,255,255)</td>
</tr>
<tr>
<td bgcolor="#ff00ff">&nbsp;</td>
<td style="text-align:center;">rgb(255,0,255)</td>
</tr>
<tr>
<td bgcolor="#c0c0c0">&nbsp;</td>
<td style="text-align:center;">rgb(192,192,192)</td>
</tr>
<tr>
<td bgcolor="#ffffff">&nbsp;</td>
<td style="text-align:center;">rgb(255,255,255)</td>
</tr>
</table>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css5->id,
'heading' => 'Building Color Codes',
'heading_body' => '<p>You can build millions of color codes using our Color Code Builder. Check our HTML Color Code Builder. To use this tool, you would need a Java Enabled Browser.</p>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);



Code::create([
'course_id' => 2,
'lesson_id' => $css5->id,
'heading' => 'Browser safe Colors',
'heading_body' => '<p>Here is the list of 216 colors which are supposed to be most safe and computer independent colors. These colors vary from hexa code 000000 to FFFFFF. These colors are safe to use because they ensure that all computers would display the colors correctly when running a 256 color palette</p>
<br>
<table>
<tr>
<td style="color: white;"  bgcolor="#000000">000000</td>
<td style="color: white;"  bgcolor="#000033">000033</td>
<td style="color: white;"  bgcolor="#000066">000066</td>
<td style="color: white;"  bgcolor="#000099">000099</td>
<td style="color: white;"  bgcolor="#0000cc">0000CC</td>
<td style="color: white;"  bgcolor="#0000ff">0000FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#003300">003300</td>
<td style="color: white;"  bgcolor="#003333">003333</td>
<td style="color: white;"  bgcolor="#003366">003366</td>
<td style="color: white;"  bgcolor="#003399">003399</td>
<td style="color: white;"  bgcolor="#0033cc">0033CC</td>
<td style="color: white;"  bgcolor="#0033ff">0033FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#006600">006600</td>
<td style="color: white;"  bgcolor="#006633">006633</td>
<td style="color: white;"  bgcolor="#006666">006666</td>
<td style="color: white;"  bgcolor="#006699">006699</td>
<td style="color: white;"  bgcolor="#0066cc">0066CC</td>
<td style="color: white;"  bgcolor="#0066ff">0066FF</td>
</tr>
<tr>
<td  bgcolor="#009900">009900</td>
<td  bgcolor="#009933">009933</td>
<td  bgcolor="#009966">009966</td>
<td  bgcolor="#009999">009999</td>
<td  bgcolor="#0099cc">0099CC</td>
<td  bgcolor="#0099ff">0099FF</td>
</tr>
<tr>
<td  bgcolor="#00cc00">00CC00</td>
<td  bgcolor="#00cc33">00CC33</td>
<td  bgcolor="#00cc66">00CC66</td>
<td  bgcolor="#00cc99">00CC99</td>
<td  bgcolor="#00cccc">00CCCC</td>
<td  bgcolor="#00ccff">00CCFF</td>
</tr>
<tr>
<td  bgcolor="#00ff00">00FF00</td>
<td  bgcolor="#00ff33">00FF33</td>
<td  bgcolor="#00ff66">00FF66</td>
<td  bgcolor="#00ff99">00FF99</td>
<td  bgcolor="#00ffcc">00FFCC</td>
<td  bgcolor="#00ffff">00FFFF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#330000">330000</td>
<td style="color: white;"  bgcolor="#330033">330033</td>
<td style="color: white;"  bgcolor="#330066">330066</td>
<td style="color: white;"  bgcolor="#330099">330099</td>
<td style="color: white;"  bgcolor="#3300cc">3300CC</td>
<td style="color: white;"  bgcolor="#3300ff">3300FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#333300">333300</td>
<td style="color: white;"  bgcolor="#333333">333333</td>
<td style="color: white;"  bgcolor="#333366">333366</td>
<td style="color: white;"  bgcolor="#333399">333399</td>
<td style="color: white;"  bgcolor="#3333cc">3333CC</td>
<td style="color: white;"  bgcolor="#3333ff">3333FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#336600">336600</td>
<td style="color: white;"  bgcolor="#336633">336633</td>
<td style="color: white;"  bgcolor="#336666">336666</td>
<td style="color: white;"  bgcolor="#336699">336699</td>
<td style="color: white;"  bgcolor="#3366cc">3366CC</td>
<td style="color: white;"  bgcolor="#3366ff">3366FF</td>
</tr>
<tr>
<td  bgcolor="#339900">339900</td>
<td  bgcolor="#339933">339933</td>
<td  bgcolor="#339966">339966</td>
<td  bgcolor="#339999">339999</td>
<td  bgcolor="#3399cc">3399CC</td>
<td  bgcolor="#3399ff">3399FF</td>
</tr>
<tr>
<td  bgcolor="#33cc00">33CC00</td>
<td  bgcolor="#33cc33">33CC33</td>
<td  bgcolor="#33cc66">33CC66</td>
<td  bgcolor="#33cc99">33CC99</td>
<td  bgcolor="#33cccc">33CCCC</td>
<td  bgcolor="#33ccff">33CCFF</td>
</tr>
<tr>
<td  bgcolor="#33ff00">33FF00</td>
<td  bgcolor="#33ff33">33FF33</td>
<td  bgcolor="#33ff66">33FF66</td>
<td  bgcolor="#33ff99">33FF99</td>
<td  bgcolor="#33ffcc">33FFCC</td>
<td  bgcolor="#33ffff">33FFFF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#660000">660000</td>
<td style="color: white;"  bgcolor="#660033">660033</td>
<td style="color: white;"  bgcolor="#660066">660066</td>
<td style="color: white;"  bgcolor="#660099">660099</td>
<td style="color: white;"  bgcolor="#6600cc">6600CC</td>
<td style="color: white;"  bgcolor="#6600ff">6600FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#663300">663300</td>
<td style="color: white;"  bgcolor="#663333">663333</td>
<td style="color: white;"  bgcolor="#663366">663366</td>
<td style="color: white;"  bgcolor="#663399">663399</td>
<td style="color: white;"  bgcolor="#6633cc">6633CC</td>
<td style="color: white;"  bgcolor="#6633ff">6633FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#666600">666600</td>
<td style="color: white;"  bgcolor="#666633">666633</td>
<td style="color: white;"  bgcolor="#666666">666666</td>
<td style="color: white;"  bgcolor="#666699">666699</td>
<td style="color: white;"  bgcolor="#6666cc">6666CC</td>
<td style="color: white;"  bgcolor="#6666ff">6666FF</td>
</tr>
<tr>
<td  bgcolor="#669900">669900</td>
<td  bgcolor="#669933">669933</td>
<td  bgcolor="#669966">669966</td>
<td  bgcolor="#669999">669999</td>
<td  bgcolor="#6699cc">6699CC</td>
<td  bgcolor="#6699ff">6699FF</td>
</tr>
<tr>
<td  bgcolor="#66cc00">66CC00</td>
<td  bgcolor="#66cc33">66CC33</td>
<td  bgcolor="#66cc66">66CC66</td>
<td  bgcolor="#66cc99">66CC99</td>
<td  bgcolor="#66cccc">66CCCC</td>
<td  bgcolor="#66ccff">66CCFF</td>
</tr>
<tr>
<td  bgcolor="#66ff00">66FF00</td>
<td  bgcolor="#66ff33">66FF33</td>
<td  bgcolor="#66ff66">66FF66</td>
<td  bgcolor="#66ff99">66FF99</td>
<td  bgcolor="#66ffcc">66FFCC</td>
<td  bgcolor="#66ffff">66FFFF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#990000">990000</td>
<td style="color: white;"  bgcolor="#990033">990033</td>
<td style="color: white;"  bgcolor="#990066">990066</td>
<td style="color: white;"  bgcolor="#990099">990099</td>
<td style="color: white;"  bgcolor="#9900cc">9900CC</td>
<td style="color: white;"  bgcolor="#9900ff">9900FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#993300">993300</td>
<td style="color: white;"  bgcolor="#993333">993333</td>
<td style="color: white;"  bgcolor="#993366">993366</td>
<td style="color: white;"  bgcolor="#993399">993399</td>
<td style="color: white;"  bgcolor="#9933cc">9933CC</td>
<td style="color: white;"  bgcolor="#9933ff">9933FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#996600">996600</td>
<td style="color: white;"  bgcolor="#996633">996633</td>
<td style="color: white;"  bgcolor="#996666">996666</td>
<td style="color: white;"  bgcolor="#996699">996699</td>
<td style="color: white;"  bgcolor="#9966cc">9966CC</td>
<td style="color: white;"  bgcolor="#9966ff">9966FF</td>
</tr>
<tr>
<td  bgcolor="#999900">999900</td>
<td  bgcolor="#999933">999933</td>
<td  bgcolor="#999966">999966</td>
<td  bgcolor="#999999">999999</td>
<td  bgcolor="#9999cc">9999CC</td>
<td  bgcolor="#9999ff">9999FF</td>
</tr>
<tr>
<td  bgcolor="#99cc00">99CC00</td>
<td  bgcolor="#99cc33">99CC33</td>
<td  bgcolor="#99cc66">99CC66</td>
<td  bgcolor="#99cc99">99CC99</td>
<td  bgcolor="#99cccc">99CCCC</td>
<td  bgcolor="#99ccff">99CCFF</td>
</tr>
<tr>
<td  bgcolor="#99ff00">99FF00</td>
<td  bgcolor="#99ff33">99FF33</td>
<td  bgcolor="#99ff66">99FF66</td>
<td  bgcolor="#99ff99">99FF99</td>
<td  bgcolor="#99ffcc">99FFCC</td>
<td  bgcolor="#99ffff">99FFFF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#cc0000">CC0000</td>
<td style="color: white;"  bgcolor="#cc0033">CC0033</td>
<td style="color: white;"  bgcolor="#cc0066">CC0066</td>
<td style="color: white;"  bgcolor="#cc0099">CC0099</td>
<td style="color: white;"  bgcolor="#cc00cc">CC00CC</td>
<td style="color: white;"  bgcolor="#cc00ff">CC00FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#cc3300">CC3300</td>
<td style="color: white;"  bgcolor="#cc3333">CC3333</td>
<td style="color: white;"  bgcolor="#cc3366">CC3366</td>
<td style="color: white;"  bgcolor="#cc3399">CC3399</td>
<td style="color: white;"  bgcolor="#cc33cc">CC33CC</td>
<td style="color: white;"  bgcolor="#cc33ff">CC33FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#cc6600">CC6600</td>
<td style="color: white;"  bgcolor="#cc6633">CC6633</td>
<td style="color: white;"  bgcolor="#cc6666">CC6666</td>
<td style="color: white;"  bgcolor="#cc6699">CC6699</td>
<td style="color: white;"  bgcolor="#cc66cc">CC66CC</td>
<td style="color: white;"  bgcolor="#cc66ff">CC66FF</td>
</tr>
<tr>
<td  bgcolor="#cc9900">CC9900</td>
<td  bgcolor="#cc9933">CC9933</td>
<td  bgcolor="#cc9966">CC9966</td>
<td  bgcolor="#cc9999">CC9999</td>
<td  bgcolor="#cc99cc">CC99CC</td>
<td  bgcolor="#cc99ff">CC99FF</td>
</tr>
<tr>
<td  bgcolor="#cccc00">CCCC00</td>
<td  bgcolor="#cccc33">CCCC33</td>
<td  bgcolor="#cccc66">CCCC66</td>
<td  bgcolor="#cccc99">CCCC99</td>
<td  bgcolor="#cccccc">CCCCCC</td>
<td  bgcolor="#ccccff">CCCCFF</td>
</tr>
<tr>
<td  bgcolor="#ccff00">CCFF00</td>
<td  bgcolor="#ccff33">CCFF33</td>
<td  bgcolor="#ccff66">CCFF66</td>
<td  bgcolor="#ccff99">CCFF99</td>
<td  bgcolor="#ccffcc">CCFFCC</td>
<td  bgcolor="#ccffff">CCFFFF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#ff0000">FF0000</td>
<td style="color: white;"  bgcolor="#ff0033">FF0033</td>
<td style="color: white;"  bgcolor="#ff0066">FF0066</td>
<td style="color: white;"  bgcolor="#ff0099">FF0099</td>
<td style="color: white;"  bgcolor="#ff00cc">FF00CC</td>
<td style="color: white;"  bgcolor="#ff00ff">FF00FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#ff3300">FF3300</td>
<td style="color: white;"  bgcolor="#ff3333">FF3333</td>
<td style="color: white;"  bgcolor="#ff3366">FF3366</td>
<td style="color: white;"  bgcolor="#ff3399">FF3399</td>
<td style="color: white;"  bgcolor="#ff33cc">FF33CC</td>
<td style="color: white;"  bgcolor="#ff33ff">FF33FF</td>
</tr>
<tr>
<td style="color: white;"  bgcolor="#ff6600">FF6600</td>
<td style="color: white;"  bgcolor="#ff6633">FF6633</td>
<td style="color: white;"  bgcolor="#ff6666">FF6666</td>
<td style="color: white;"  bgcolor="#ff6699">FF6699</td>
<td style="color: white;"  bgcolor="#ff66cc">FF66CC</td>
<td style="color: white;"  bgcolor="#ff66ff">FF66FF</td>
</tr>
<tr>
<td  bgcolor="#ff9900">FF9900</td>
<td  bgcolor="#ff9933">FF9933</td>
<td  bgcolor="#ff9966">FF9966</td>
<td  bgcolor="#ff9999">FF9999</td>
<td  bgcolor="#ff99cc">FF99CC</td>
<td  bgcolor="#ff99ff">FF99FF</td>
</tr>
<tr>
<td  bgcolor="#ffcc00">FFCC00</td>
<td  bgcolor="#ffcc33">FFCC33</td>
<td  bgcolor="#ffcc66">FFCC66</td>
<td  bgcolor="#ffcc99">FFCC99</td>
<td  bgcolor="#ffcccc">FFCCCC</td>
<td  bgcolor="#ffccff">FFCCFF</td>
</tr>
<tr>
<td  bgcolor="#ffff00">FFFF00</td>
<td  bgcolor="#ffff33">FFFF33</td>
<td  bgcolor="#ffff66">FFFF66</td>
<td  bgcolor="#ffff99">FFFF99</td>
<td  bgcolor="#ffffcc">FFFFCC</td>
<td  bgcolor="#ffffff">FFFFFF</td>
</tr>
</table>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);



$css6 = Lesson::create([
'admin_id' => $admin,
'course_id' => 2,
'title' => 'CSS Backgrounds',
'slug' => 'css_backgrounds',
]);

Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => '',
'heading_body' => '<p>This chapter teaches you how to set backgrounds of various HTML elements. You can set the following background properties of an element.<p>
<br>
<ul>
<li><p>The <b>background-color</b> property is used to set the background color of an element.</p></li>
<li><p>The <b>background-image</b> property is used to set the background image of an element.</p></li>
<li><p>The <b>background-repeat</b> property is used to control the repetition of an image in the background.</p></li>
<li><p>The <b>background-position</b> property is used to control the position of an image in the background.</p></li>
<li><p>The <b>background-attachment</b> property is used to control the scrolling of an image in the background.</p></li>
<li><p>The <b>background</b> property is used as a shorthand to specify a number of other background properties.</p></li>
</ul>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => 'Set the Background Color',
'heading_body' => '<p>Following is the example which demonstrates how to set the background color for an element.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "background-color:yellow;">
         This text has a yellow background color.
      </p>
   </body>
</html> ',
'javascript_code' => '', ]);



Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => 'Set the Background Image',
'heading_body' => '<p>We can set the background image by calling local stored images as shown below</p>',
'html_code' => '',
'css_code' => '   <head>
      <style>
         body  {
            background-image: url("/css/images/css.jpg");
            background-color: #cccccc;
         }
      </style>
   </head>
   
   <body>
      <h1>Hello World!</h1>
   </body>
<html>',
'javascript_code' => '', ]);



Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => 'Repeat the Background Image',
'heading_body' => '<p>The following example demonstrates how to repeat the background image if an image is small. You can use no-repeat value for background-repeat property if you don\'t want to repeat an image, in this case image will display only once.</p>
<br>
By default background-repeat property will have repeat value.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
      <style>
         body {
            background-image: url("/css/images/css.jpg");
            background-repeat: repeat;
         }
      </style>
   </head>

   <body>
      <p>Tutorials point</p>
   </body>
</html>',
'javascript_code' => '', ]);



Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => '',
'heading_body' => '<p>The following example which demonstrates how to repeat the background image vertically.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
      <style>
         body {
            background-image: url("/css/images/css.jpg");
            background-repeat: repeat-y;
         }
      </style>
   </head>

   <body>
      <p>Tutorials point</p>
   </body>
</html>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => '',
'heading_body' => '<p>The following example which demonstrates how to repeat the background image horizontally.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
      <style>
         body {
            background-image: url("/css/images/css.jpg");
            background-repeat: repeat-x;
         }
      </style>
   </head>
   
   <body>
      <p>Tutorials point</p>
   </body>
</html>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => 'Set the Background Image Position',
'heading_body' => '<p>The following example demonstrates how to set the background image position 100 pixels away from the left side.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
      <style>
         body {
            background-image: url("/css/images/css.jpg");
            background-position:100px;
         }
      </style>
   </head>

   <body>
      <p>Tutorials point</p>
   </body>
</html>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => '',
'heading_body' => '<p>The following example demonstrates how to set the background image position 100 pixels away from the left side and 200 pixels down from the top.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
      <style>
         body {
            background-image: url("/css/images/css.jpg");
            background-position:100px 200px;
         }
      </style>
   </head>

   <body>
      <p>Tutorials point</p>
   </body>
</html>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => 'Set the Background Attachment',
'heading_body' => '<p>Background attachment determines whether a background image is fixed or scrolls with the rest of the page.</p>
<br>
<p>The following example demonstrates how to set the fixed background image.</p>',
'html_code' => '',
'css_code' => '<!DOCTYPE html>
<html>
   <head>
      <style>
         body {
            background-image: url(\'/css/images/css.jpg\');
            background-repeat: no-repeat;
            background-attachment: fixed;
         }
      </style>
   </head>

   <body>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
   </body>
</html>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => '',
'heading_body' => '<p>The following example demonstrates how to set the scrolling background image.</p>',
'html_code' => '',
'css_code' => '<!DOCTYPE html>
<html>
   <head>
      <style>
         body {
            background-image: url(\'/css/images/css.jpg\');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-attachment:scroll;
         }
      </style>
   </head>

   <body>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
      <p>The background-image is fixed. Try to scroll down the page.</p>
   </body>
</html>',
'javascript_code' => '', ]);

Code::create([
'course_id' => 2,
'lesson_id' => $css6 ->id,
'heading' => 'Shorthand Property',
'heading_body' => '<p>You can use the background property to set all the background properties at once. For example</p>',
'html_code' => '',
'css_code' => '<p style = "background:url(/images/pattern1.gif) repeat fixed;">
   This parapgraph has fixed repeated background image.
</p>',
'javascript_code' => '', ]);



$css7 = Lesson::create([
'admin_id' => $admin,
'course_id' => 2,
'title' => 'CSS Fonts',
'slug' => 'css_fonts',
]);

Code::create([
'course_id' => 2,
'lesson_id' => $css7 ->id,
'heading' => '',
'heading_body' => '<p>This chapter teaches you how to set fonts of a content, available in an HTML element. You can set following font properties of an element</p>
<br>
<ul>
<li><p>The <b>font-family</b> property is used to change the face of a font.</p></li>
<li><p>The <b>font-style</b> property is used to make a font italic or oblique.</p></li>
<li><p>The <b>font-variant</b> property is used to create a small-caps effect.</p></li>
<li><p>The <b>font-weight</b> property is used to increase or decrease how bold or light a font appears.</p></li>
<li><p>The <b>font-size</b> property is used to increase or decrease the size of a font.</p></li>
<li><p>The <b>font</b> property is used as shorthand to specify a number of other font properties.</p></li>
</ul>',
'html_code' => '',
'css_code' => '',
'javascript_code' => '', ]);



Code::create([
'course_id' => 2,
'lesson_id' => $css7 ->id,
'heading' => 'Set the Font Family',
'heading_body' => '<p>Following is the example, which demonstrates how to set the font family of an element. Possible value could be any font family name.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "font-family:georgia,garamond,serif;">
         This text is rendered in either georgia, garamond, or the 
         default serif font depending on which font  you have at your system.
      </p>
   </body>
</html>',
'javascript_code' => '', ]);	


Code::create([
'course_id' => 2,
'lesson_id' => $css7 ->id,
'heading' => 'Set the Font Style',
'heading_body' => '<p>Following is the example, which demonstrates how to set the font style of an element. Possible values are normal, italic and oblique.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "font-style:italic;">
         This text will be rendered in italic style
      </p>
   </body>
</html> ',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css7 ->id,
'heading' => 'Set the Font Variant',
'heading_body' => '<p>The following example demonstrates how to set the font variant of an element. Possible values are normal and small-caps.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "font-variant:small-caps;">
         This text will be rendered as small caps
      </p>
   </body>
</html> ',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css7 ->id,
'heading' => 'Set the Font Weight',
'heading_body' => '<p>The following example demonstrates how to set the font weight of an element. The font-weight property provides the functionality to specify how bold a font is. Possible values could be normal, bold, bolder, lighter, 100, 200, 300, 400, 500, 600, 700, 800, 900.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "font-weight:bold;">
         This font is bold.
      </p>
      
      <p style = "font-weight:bolder;">
         This font is bolder.
      </p>
      
      <p style = "font-weight:500;">
         This font is 500 weight.
      </p>
   </body>
</html> ',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css7 ->id,
'heading' => 'Set the Font Size',
'heading_body' => '<p>The following example demonstrates how to set the font size of an element. The font-size property is used to control the size of fonts. Possible values could be xx-small, x-small, small, medium, large, x-large, xx-large, smaller, larger, size in pixels or in %.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "font-size:20px;">
         This font size is 20 pixels
      </p>
      
      <p style = "font-size:small;">
         This font size is small
      </p>
      
      <p style = "font-size:large;">
         This font size is large
      </p>
   </body>
</html>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css7 ->id,
'heading' => 'Set the Font Size Adjust',
'heading_body' => 'The following example demonstrates how to set the font size adjust of an element. This property enables you to adjust the x-height to make fonts more legible. Possible value could be any number.</p>',
'html_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "font-size-adjust:0.61;">
         This text is using a font-size-adjust value.
      </p>
   </body>
</html>',
'css_code' => '',
'javascript_code' => '', ]);



Code::create([
'course_id' => 2,
'lesson_id' => $css7 ->id,
'heading' => 'Set the Font Stretch',
'heading_body' => '<p>The following example demonstrates how to set the font stretch of an element. This property relies on the user\'s computer to have an expanded or condensed version of the font being used.</p>
<br>
<p>Possible values could be normal, wider, narrower, ultra-condensed, extra-condensed, condensed, semi-condensed, semi-expanded, expanded, extra-expanded, ultra-expanded.</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "font-stretch:ultra-expanded;">
         If this doesn\'t appear to work, it is likely that your computer 
         doesn\'t have a <br>condensed or expanded version of the font being used.
      </p>
   </body>
</html>',
'javascript_code' => '', ]);


Code::create([
'course_id' => 2,
'lesson_id' => $css7 ->id,
'heading' => 'Shorthand Property',
'heading_body' => '<p>You can use the font property to set all the font properties at once. For example</p>',
'html_code' => '',
'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "font:italic small-caps bold 15px georgia;">
         Applying all the properties on the text at once.
      </p>
   </body>
</html>',
'javascript_code' => '', ]);



$css8 = Lesson::create([
        	'admin_id' => $admin,
        	'course_id' => 2,
                'title' => 'CSS Text',
                'slug' => 'css_text',
          	 ]);

Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'CSS Text',
		'heading_body'=> '<p>This chapter teaches you how to manipulate text using CSS properties. You can set following text properties of an element &minus;</p>
<ul class="list">
<li><p>The <b>color</b> property is used to set the color of a text.</p></li>
<li><p>The <b>direction</b> property is used to set the text direction.</p></li>
<li><p>The <b>letter-spacing</b> property is used to add or subtract space between the letters that make up a word.</p></li>
<li><p>The <b>word-spacing</b> property is used to add or subtract space between the words of a sentence.</p></li>
<li><p>The <b>text-indent</b> property is used to indent the text of a paragraph.</p></li>
<li><p>The <b>text-align</b> property is used to align the text of a document.</p></li>
<li><p>The <b>text-decoration</b> property is used to underline, overline, and strikethrough text.</p></li>
<li><p>The <b>text-transform</b> property is used to capitalize text or convert text to uppercase or lowercase letters.</p></li>
<li><p>The <b>white-space</b> property is used to control the flow and formatting of text.</p></li>
<li><p>The <b>text-shadow</b> property is used to set the text shadow around a text.</p></li>',
		'html_code' => '',
		'css_code' => '',
                'javascript_code' => '',
]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'Set the Text Color', 
		'heading_body'=> '<p>The following example demonstrates how to set the text color. Possible value could be any color name in any valid format.</p>',
		'html_code' => '',		
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "color:red;">
         This text will be written in red.
      </p>
   </body>
</html>', 
                'javascript_code' => '',
          	 ]);

Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'Set the Text Direction', 
		'heading_body'=> '<p>The following example demonstrates how to set the direction of a text. Possible values are <i>ltr or rtl</i>.</p>', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "direction:rtl;">
         This text will be rendered from right to left
      </p>
   </body>
</html>',
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'Set the Space between Characters',
		'heading_body'=> '<p>The following example demonstrates how to set the space between characters. Possible values are <i>normal or a number specifying space.</i>.</p>', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "letter-spacing:5px;">
         This text is having space between letters.
      </p>
   </body>
</html>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'Set the Space between Words',
		'heading_body'=> '<p>The following example demonstrates how to set the space between words. Possible values are <i>normal or a number specifying space</i>.</p>	', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "word-spacing:5px;">
         This text is having space between words.
      </p>
   </body>
</html> ',
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id'  => $css8->id,
                'heading' => 'Set the Text Indent',
		'heading_body'=> '<p>The following example demonstrates how to indent the first line of a paragraph. Possible values are <i>% or  a number specifying indent space</i>.</p>', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "text-indent:1cm;">
         This text will have first line indented by 1cm and this line will remain at 
         its actual position this is done by CSS text-indent property.
      </p>
   </body>
</html>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'Set the Text Alignment',
		'heading_body'=> '<p>The following example demonstrates how to align a text. Possible values are <i>left, right, center, justify</i>.</p>', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "text-align:right;">
         This will be right aligned.
      </p>
      
      <p style = "text-align:center;">
         This will be center aligned.
      </p>
      
      <p style = "text-align:left;">
         This will be left aligned.
      </p>
   </body>
</html>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'Decorating the Text',
		'heading_body'=> '<p>The following example demonstrates how to decorate a text. Possible values are <i>none, underline, overline, line-through, blink</i>.</p>', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "text-decoration:underline;">
         This will be underlined
      </p>
      
      <p style = "text-decoration:line-through;">
         This will be striked through.
      </p>
      
      <p style = "text-decoration:overline;">
         This will have a over line.
      </p>
      
      <p style = "text-decoration:blink;">
         This text will have blinking effect
      </p>
   </body>
</html> ', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'Set the Text Cases',
		'heading_body'=> '<p>The following example demonstrates how to set the cases for a text. Possible values are <i>none, capitalize, uppercase, lowercase</i>.</p>', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "text-transform:capitalize;">
         This will be capitalized
      </p>
      
      <p style = "text-transform:uppercase;">
         This will be in uppercase
      </p>
      
      <p style = "text-transform:lowercase;">
         This will be in lowercase
      </p>
   </body>
</html> ', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'Set the White Space between Text',
		'heading_body'=> '<p>The following example demonstrates how white space inside an element is handled. Possible values are <i>normal, pre, nowrap</i>.</p>', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "white-space:pre;">
         This text has a line break and the white-space pre setting 
         tells the browser to honor it just like the HTML pre tag.
      </p>
   </body>
</html> ', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css8->id,
                'heading' => 'Set the Text Shadow',
		'heading_body'=> '<p>The following example demonstrates how to set the shadow around a text. This may not be supported by all the browsers.</p>', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "text-shadow:4px 4px 8px blue;">
         If your browser supports the CSS text-shadow property, 
         this text will have a  blue shadow.
      </p>
   </body>
</html> ', 
                'javascript_code' => '',
          	 ]);

$css9 = Lesson::create([
        	'admin_id' => $admin,
        	'course_id' => 2,
                'title' => 'Using Images',
                'slug' => 'css_Using Images',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css9->id,
                'heading' => 'Images',
		'heading_body'=> '<p>Images play an important role in any webpage. Though it is not recommended to include a lot of images, but it is still important to use good images wherever required.</p>

				<p>CSS plays a good role to control image display. You can set the following image properties using CSS.</p> 
		<ul class="list">
		<li><p>The <b>border</b> property is used to set the width of an image border.</p></li>

		<li><p>The <b>height</b> property is used to set the height of an image.</p></li>

		<li><p>The <b>width</b> property is used to set the width of an image.</p></li>
		
<li><p>The <b>-moz-opacity</b> property is used to set the opacity of an image.</p></li>

		</ul>',
			
		'html_code' => '',
		'css_code' => '________________', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css9->id,
                'heading' => 'The Image Border Property',
		'heading_body'=> '<p>The <i>border</i> property of an image is used to set the width of an image border. This property can have a value in length or in &#37;.</p>

				<p>A width of zero pixels means no border.</p>
				
<p>Here is the example &minus;</p>', 
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <img style = "border:0px;" src = "/css/images/logo.png" />
      <br />
      <img style = "border:3px dashed red;" src = "/css/images/logo.png" />
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css9->id,
                'heading' => 'The Image Height Property',
		'heading_body'=> '<p>The <i>height</i> property of an image is used to set the height of an image. This property can have a value in length or in &#37;. While giving value in &#37;, it applies it in respect of the box in which an image is available.</p>

				<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <img style = "border:1px solid red; height:100px;" src = "/css/images/logo.png" />
      <br />
      <img style = "border:1px solid red; height:50%;" src = "/css/images/logo.png" />
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css9->id,
                'heading' => 'The Image Width Property',
		'heading_body'=> '<p>The <i>width</i> property of an image is used to set the width of an image. This property can have a value in length or in &#37;. While giving value in &#37;, it applies it in respect of the box in which an image is available.</p>

				<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <img style = "border:1px solid red; width:150px;" src = "/css/images/logo.png" />
      <br />
      <img style = "border:1px solid red; width:100%;" src = "/css/images/logo.png" />
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css9->id,
                'heading' => 'The -moz-opacity Property',
		'heading_body'=> '<p>The <i>-moz-opacity</i> property of an image is used to set the opacity of an image. This property is used to create a transparent image in Mozilla. IE uses <b>filter:alpha(opacity=x)</b> to create transparent images.</p>
<p>In Mozilla (-moz-opacity:x) x can be a value from 0.0 - 1.0. A lower value makes the element more transparent (The same things goes for the CSS3-valid syntax opacity:x).</p>
				<p>In IE (filter:alpha(opacity=x)) x can be a value from 0 - 100. A lower value makes the element more transparent.</p>

				<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <img style = "border:1px solid red; -moz-opacity:0.4; filter:alpha(opacity=40);" src = "/css/images/logo.png" />
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);


$css10 = Lesson::create([
        	'admin_id' => $admin,
        	'course_id' => 2,
                'title' => 'Links',
                'slug' => 'css_links',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css10->id,
                'heading' => 'Links',
		'heading_body'=> 'p>This chapter teaches you how to set different properties of a hyper link using CSS.  You can set following properties of a hyper link &minus;</p>
				
<p>We will revisit the same properties when we will discuss Pseudo-Classes of CSS.</p>
		<ul class="list">
<li><p>The <b>:link</b> signifies unvisited hyperlinks.</p></li>

		<li><p>The <b>:visited</b> signifies visited hyperlinks.</p></li>

		<li><p>The <b>:hover</b> signifies an element that currently has the user\'s mouse pointer hovering over it.</p></li>

		<li><p>The <b>:active</b> signifies an element on which the user is currently clicking.</p></li>

		</ul>
				<p>Usually, all these properties are kept in the header part of the HTML document.</p>

				<p>Remember a:hover MUST come after a:link and a:visited in the CSS definition in order to be effective. Also, a:active MUST come after a:hover in the CSS definition as follows &minus;</p>',
		'html_code' => '',
		'css_code' => '<style type = "text/css">
   a:link {color: #000000}
   a:visited {color: #006600}
   a:hover {color: #FFCC00}
   a:active {color: #FF00CC}
</style>
<p>Now, we will see how to use these properties to give different effects to hyperlinks.</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css10->id,
                'heading' => 'Set the Color of Links',
		'heading_body'=> '<p>The following example demonstrates how to set the link color. Possible values could be any color name in any valid format.</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
      <style type = "text/css">
         a:link {color:#000000}
     </style>
   </head>

   <body>
      <a href = "">Link</a>
   </body>
</html>  
<p>It will produce the following black link &minus;</p>',
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css10->id,
                'heading' => 'Set the Color of Visited Links',
		'heading_body'=> '<p>The following example demonstrates how to set the color of visited links. Possible values could be any color name in any valid format.</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
      <style type = "text/css">
         a:visited {color: #006600}
      </style>
   </head>

   <body>
      <a href = ""> link</a> 
   </body>
</html> 
<p>It will produce the following link. Once you will click this link, it will change its color to green.</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css10->id,
                'heading' => 'Change the Color of Links when Mouse is Over',
		'heading_body'=> '<p>The following example demonstrates how to change the color of links when we bring a mouse pointer over that link. Possible values could be any color name in any valid format.</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
      <style type = "text/css">
         a:hover {color: #FFCC00}
      </style>
   </head>

   <body>
      <a href = "">Link</a>
   </body>
</html> 
<p>It will produce the following link. Now, you bring your mouse over this link and you will see that it changes its color to yellow.</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css10->id,
                'heading' => 'Change the Color of Active Links',
		'heading_body'=> '<p>The following example demonstrates how to change the color of active links. Possible values could be any color name in any valid format.</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
      <style type = "text/css">
         a:active {color: #FF00CC}
      </style>
   </head>

   <body>
      <a href = "">Link</a>
   </body>
</html> 
<p>It will produce the following link. It will change its color to pink when the user clicks it.</p>', 
                'javascript_code' => '',
          	 ]);

$css11 = Lesson::create([
        	'admin_id' => $admin,
        	'course_id' => 2,
                'title' => 'CSS Tables',
                'slug' => 'css_tables',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css11->id,
                'heading' => '___________________',
		'heading_body'=> '<p>This tutorial will teach you how to set different properties of an HTML table using CSS. You can set following properties of a table &minus;</p>

		<ul class="list">

		<li><p>The <b>border-collapse</b> specifies whether the browser should control the appearance of the adjacent borders that touch each other or whether each cell should maintain its style.</p></li>
		
<li><p>The <b>border-spacing</b> specifies the width that should appear between table cells.</p></li>

		<li><p>The <b>caption-side</b> captions are presented in the &lt;caption&gt; element. By default, these are rendered above the table in the document. You use the <i>caption-side</i> property to control the placement of the table caption.</p></li>
		
<li><p>The <b>empty-cells</b> specifies whether the border should be shown if a cell is empty.</p></li>

		<li><p>The <b>table-layout</b> allows browsers to speed up layout of a table by using the first width properties it comes across for the rest of a column rather than having to load the whole table before rendering it.</p></li>

		</ul>

		<p>Now, we will see how to use these properties with examples.</p>',
		'html_code' => '',
		'css_code' => '__________________', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css11->id,
                'heading' => 'The border-collapse Property',
		'heading_body'=> '<p>This property can have two values <i>collapse</i> and <i>separate</i>. The following example uses both the values &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
      <style type = "text/css">
         table.one {border-collapse:collapse;}
         table.two {border-collapse:separate;}
         
         td.a {
            border-style:dotted; 
            border-width:3px; 
            border-color:#000000; 
            padding: 10px;
         }
         td.b {
            border-style:solid; 
            border-width:3px; 
            border-color:#333333; 
            padding:10px;
         }
      </style>
   </head>

   <body>
      <table class = "one">
         <caption>Collapse Border Example</caption>
         <tr><td class = "a"> Cell A Collapse Example</td></tr>
         <tr><td class = "b"> Cell B Collapse Example</td></tr>
      </table>
      <br />
      
      <table class = "two">
         <caption>Separate Border Example</caption>
         <tr><td class = "a"> Cell A Separate Example</td></tr>
         <tr><td class = "b"> Cell B Separate Example</td></tr>
      </table>
   </body>
</html>
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css11->id,
                'heading' => 'The border-spacing Property',
		'heading_body'=> '<p>The border-spacing property specifies the distance that separates adjacent cells\'. borders. It can take either one or two values; these should be units of length.</p>

				<p>If you provide one value, it will applies to both vertical and horizontal borders. Or you can specify two values, in which case, the first refers to the horizontal spacing and the second to the vertical spacing &minus;</p>

				<p><b>NOTE</b> &minus; Unfortunately, this property does not work in Netscape 7 or IE 6.</p>',
		'html_code' => '',
		'css_code' => '<style type="text/css">
   /* If you provide one value */
   table.example {border-spacing:10px;}
   /* This is how you can provide two values */
   table.example {border-spacing:10px; 15px;}
</style>
<p>Now let\'s modify the previous example and see the effect &minus;</p>',
'css_code' => '<html>
   <head>
      <style type = "text/css">
         table.one {
            border-collapse:separate;
            width:400px;
            border-spacing:10px;
         }
         table.two {
            border-collapse:separate;
            width:400px;
            border-spacing:10px 50px;
         }
      </style>
   </head>
   <body>
   
      <table class = "one" border = "1">
         <caption>Separate Border Example with border-spacing</caption>
         <tr><td> Cell A Collapse Example</td></tr>
         <tr><td> Cell B Collapse Example</td></tr>
      </table>
      <br />
      
      <table class = "two" border = "1">
         <caption>Separate Border Example with border-spacing</caption>
         <tr><td> Cell A Separate Example</td></tr>
         <tr><td> Cell B Separate Example</td></tr>
      </table>
      
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css11->id,
                'heading' => 'The caption-side Property',
		'heading_body'=> '<p>The caption-side property allows you to specify where the content of a &lt;caption&gt; element should be placed in relationship to the table. The table that follows lists the possible values.</p>
<p>This property can have one of the four values <i>top, bottom, left </i> or <i> right</i>. The following example uses each value.</p>

				<p><b>NOTE</b> &minus; These properties may not work with your IE Browser.</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
      <style type = "text/css">
         caption.top {caption-side:top}
         caption.bottom {caption-side:bottom}
         caption.left {caption-side:left}
         caption.right {caption-side:right}
      </style>
   </head>

   <body>
   
      <table style = "width:400px; border:1px solid black;">
         <caption class = "top">
            This caption will appear at the top
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      <br />
      
      <table style = "width:400px; border:1px solid black;">
         <caption class = "bottom">
            This caption will appear at the bottom
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      <br />
      
      <table style = "width:400px; border:1px solid black;">
         <caption class = "left">
            This caption will appear at the left
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      <br />
      
      <table style = "width:400px; border:1px solid black;">
         <caption class = "right">
            This caption will appear at the right
         </caption>
         <tr><td > Cell A</td></tr>
         <tr><td > Cell B</td></tr>
      </table>
      
   </body>
</html>
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css11->id,
                'heading' => 'The empty-cells Property',
		'heading_body'=> '<p>The empty-cells property indicates whether a cell without any content should have a border displayed.</p>

			<p>This property can have one of the three values - <i>show, hide</i> or <i>inherit</i>.</p>

			<p>Here is the empty-cells property used to hide borders of empty cells in the &lt;table&gt; element.</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
      <style type = "text/css">
         table.empty {
            width:350px;
            border-collapse:separate;
            empty-cells:hide;
         }
         td.empty {
            padding:5px;
            border-style:solid;
            border-width:1px;
            border-color:#999999;
         }
      </style>
   </head>

   <body>
   
      <table class = "empty">
         <tr>
            <th></th>
            <th>Title one</th>
            <th>Title two</th>
         </tr>
      
         <tr>
            <th>Row Title</th>
            <td class = "empty">value</td>
            <td class = "empty">value</td>
         </tr>
      
         <tr>
            <th>Row Title</th>
            <td class = "empty">value</td>
            <td class = "empty"></td>
         </tr>
      </table>
      
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css11->id,
                'heading' => 'The table-layout Property',
		'heading_body'=> '<p>The table-layout property is supposed to help you control how a browser should render or lay out a table.</p>

		<p>This property can have one of the three values: <i>fixed, auto</i> or <i>inherit</i>. </p>

		<p>The following example shows the difference between these properties.</p>

		<p><b>NOTE</b> &minus; This property is not supported by many browsers so do not rely on this property.</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
      <style type = "text/css">
         table.auto {
            table-layout: auto
         }
         table.fixed {
            table-layout: fixed
         }
      </style>
   </head>
   
   <body>
   
      <table class = "auto" border = "1" width = "100%">
         <tr>
            <td width = "20%">1000000000000000000000000000</td>
            <td width = "40%">10000000</td>
            <td width = "40%">100</td>
         </tr>
      </table>
      <br />
      
      <table class = "fixed" border = "1" width = "100%">
         <tr>
            <td width = "20%">1000000000000000000000000000</td>
            <td width = "40%">10000000</td>
            <td width = "40%">100</td>
         </tr>
      </table>
   
   </body>
</html>
<p>It will produce the following result &minus;</p> ', 
                'javascript_code' => '',
          	 ]);


$css12 = Lesson::create([
        	'admin_id' => $admin,
        	'course_id' => 2,
                'title' => 'CSS Borders',
                'slug' => 'css_borders',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css12->id,
                'heading' => 'Borders',
		'heading_body'=> '<p>The <i>border</i> properties allow you to specify how the border of the box representing an element should look. There are three properties of a border you can change &minus;</p>

		<ul class="list">

		<li><p>The <b>border-color</b> specifies the color of a border.</p></li>

		<li><p>The <b>border-style</b> specifies whether a border should be solid, dashed line, double line, or one of the other possible values.</p></li>

		<li><p>The <b>border-width</b> specifies the width of a border.</p></li>

		</ul>

		<p>Now, we will see how to use these properties with examples.</p>',
		'html_code' => '',
		'css_code' => '__________________', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css12->id,
                'heading' => 'The border-color Property',
		'heading_body'=> '<p>The border-color property allows you to change the color of the border surrounding an element. You can individually change the color of the bottom, left, top and right sides of an element\'s border using the properties &minus;</p>
		<ul class="list">

		<li><p><b>border-bottom-color</b> changes the color of bottom border.</p></li>

		<li><p><b>border-top-color</b> changes the color of top border.</p></li>

		<li><p><b>border-left-color</b> changes the color of left border.</p></li>

		<li><p><b>border-right-color</b> changes the color of right border.</p></li>

		</ul>
		<p>The following example shows the effect of all these properties &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
      <style type = "text/css">
         p.example1 {
            border:1px solid;
            border-bottom-color:#009900; /* Green */
            border-top-color:#FF0000;    /* Red */
            border-left-color:#330000;   /* Black */
            border-right-color:#0000CC;  /* Blue */
         }
         p.example2 {
            border:1px solid;
            border-color:#009900;        /* Green */
         }
      </style>
   </head>

   <body>
      <p class = "example1">
         This example is showing all borders in different colors.
      </p>
      
      <p class = "example2">
         This example is showing all borders in green color only.
      </p>
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css12->id,
                'heading' => 'The border-style Property',
		'heading_body'=> '<p>The border-style property allows you to select one of the following styles of border &minus;</p>

<ul class="list">

<li><p><b>none</b> &minus; No border. (Equivalent of border-width:0;)</p></li>

<li><p><b>solid</b> &minus; Border is a single solid line.</p></li>

<li><p><b>dotted</b> &minus; Border is a series of dots.</p></li>

<li><p><b>dashed</b> &minus; Border is a series of short lines.</p></li>

<li><p><b>double</b> &minus; Border is two solid lines.</p></li>

<li><p><b>groove</b> &minus; Border looks as though it is carved into the page.</p></li>

<li><p><b>ridge</b> &minus; Border looks the opposite of groove.</p></li>

<li><p><b>inset</b> &minus; Border makes the box look like it is embedded in the page.</p></li>

<li><p><b>outset</b> &minus; Border makes the box look like it is coming out of the canvas.</p></li>

<li><p><b>hidden</b> &minus; Same as none, except in terms of border-conflict resolution for table elements.</p></li>

</ul>

<p>You can individually change the style of the bottom, left, top, and right borders of an element using the following properties &minus;</p>

<ul class="list">

<li><p><b>border-bottom-style</b> changes the style of bottom border.</p>
</li>
<li><p><b>border-top-style</b> changes the style of top border.</p></li>

<li><p><b>border-left-style</b> changes the style of left border.</p></li>

<li><p><b>border-right-style</b> changes the style of right border.</p></li>

</ul>

<p>The following example shows all these border styles &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>
   
   <body>
      <p style = "border-width:4px; border-style:none;">
         This is a border with none width.
      </p>
      
      <p style = "border-width:4px; border-style:solid;">
         This is a solid border.
      </p>
      
      <p style = "border-width:4px; border-style:dashed;">
         This is a dashed border.
      </p>
      
      <p style = "border-width:4px; border-style:double;">
         This is a double border.
      </p>
      
      <p style = "border-width:4px; border-style:groove;">
         This is a groove border.
      </p>
      
      <p style = "border-width:4px; border-style:ridge">
         This is a ridge  border.
      </p>
      
      <p style = "border-width:4px; border-style:inset;">
         This is a inset border.
      </p>
      
      <p style = "border-width:4px; border-style:outset;">
         This is a outset border.
      </p>
      
      <p style = "border-width:4px; border-style:hidden;">
         This is a hidden border.
      </p>
      
      <p style = "border-width:4px; 
         border-top-style:solid;
         border-bottom-style:dashed;
         border-left-style:groove;
         border-right-style:double;">
         This is a a border with four different styles.
      </p>
   </body>
</html>
It will produce the following result &minus;', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css12->id,
                'heading' => 'The border-width Property',
		'heading_body'=> '<p>The border-width property allows you to set the width of an element borders. The value of this property could be either a length in px, pt or cm or it should be set to <i>thin, medium or thick.</i></p>

<p>You can individually change the width of the bottom, top, left, and right borders of an element using the following properties &minus;</p>

<ul class="list">

<li><p><b>border-bottom-width</b> changes the width of bottom border.</p>
</li>
<li><p><b>border-top-width</b> changes the width of top border.</p></li>

<li><p><b>border-left-width</b> changes the width of left border.</p></li>

<li><p><b>border-right-width</b> changes the width of right border.</p></li>
</ul>

<p>The following example shows all these border width &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>
   
   <body>
      <p style = "border-width:4px; border-style:solid;">
         This is a solid border whose width is 4px.
      </p>
      
      <p style = "border-width:4pt; border-style:solid;">
         This is a solid border whose width is 4pt.
      </p>
      
      <p style = "border-width:thin; border-style:solid;">
         This is a solid border whose width is thin.
      </p>
      
      <p style = "border-width:medium; border-style:solid;">
         This is a solid border whose width is medium;
      </p>
      
      <p style = "border-width:thick; border-style:solid;">
         This is a solid border whose width is thick.
      </p>
      
      <p style = "border-bottom-width:4px;border-top-width:10px;
         border-left-width: 2px;border-right-width:15px;border-style:solid;">
         This is a a border with four different width.
      </p>
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css12->id,
                'heading' => 'Border Properties Using Shorthand',
		'heading_body'=> '<p>The border property allows you to specify color, style, and width of lines in one property &minus;</p>

<p>The following example shows how to use all the three properties into a single property. This is the most frequently used property to set border around any element.</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "border:4px solid red;">
         This example is showing shorthand property for border.
      </p>
   </body>
</html>
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);


$css13 = Lesson::create([
        	'admin_id' => $admin,
        	'course_id' => 2,
                'title' => 'CSS Margins',
                'slug' => 'css_margins',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css13->id,
                'heading' => 'Margins',
		'heading_body'=> '<p>The <i>margin</i> property defines the space around an HTML element. It is possible to use negative values to overlap content.</p>

<p>The values of the margin property are not inherited by the child elements. Remember that the adjacent vertical margins (top and bottom margins) will collapse into each other so that the distance between the blocks is not the sum of the margins, but only the greater of the two margins or the same size as one margin if both are equal.</p>

<p>We have the following properties to set an element margin.</p>

<ul class="list">

<li><p>The <b>margin</b> specifies a shorthand property for setting the margin properties in one declaration.</p>
</li>
<li><p>The <b>margin-bottom</b> specifies the bottom margin of an element.</p></li>

<li><p>The <b>margin-top</b> specifies the top margin of an element.</p></li>

<li><p>The <b>margin-left</b> specifies the left margin of an element.</p></li>

<li><p>The <b>margin-right</b> specifies the right margin of an element.</p></li>

</ul>

<p>Now, we will see how to use these properties with examples.</p>',
		'html_code' => '',
		'css_code' => '__________________', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css13->id,
                'heading' => 'The Margin Property',
		'heading_body'=> '<p>The margin property allows you set all of the properties for the four margins in one declaration. Here is the syntax to set margin around a paragraph &minus;</p>

<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>
   
   <body>
      <p style = "margin: 15px; border:1px solid black;">
         all four margins will be 15px
      </p>
      
      <p style = "margin:10px 2%; border:1px solid black;">
         top and bottom margin will be 10px, left and right margin will be 2% 
         of the total width of the document.
      </p>
      
      <p style = "margin: 10px 2% -10px; border:1px solid black;">
         top margin will be 10px, left and right margin will be 2% of the 
         total width of the document, bottom margin will be -10px
      </p>
      
      <p style = "margin: 10px 2% -10px auto; border:1px solid black;">
         top margin will be 10px, right margin will be 2% of the total 
         width of the document, bottom margin will be -10px, left margin 
         will be set by the browser
      </p>
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css13->id,
                'heading' => 'The margin-bottom Property',
		'heading_body'=> '<p>The margin-bottom property allows you set bottom margin of an element. It can have a value in length, &#37; or auto.</p>

<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "margin-bottom: 15px; border:1px solid black;">
         This is a paragraph with a specified bottom margin
      </p>
      
      <p style = "margin-bottom: 5%; border:1px solid black;">
         This is another paragraph with a specified bottom margin in percent
      </p>
   </body>
</html>
<p>It will produce the following result &minus;</p> ', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css13->id,
                'heading' => 'The margin-top Property',
		'heading_body'=> '<p>The margin-top property allows you set top margin of an element. It can have a value in length, &#37; or auto.</p>

<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "margin-top: 15px; border:1px solid black;">
         This is a paragraph with a specified top margin
      </p>
      
      <p style = "margin-top: 5%; border:1px solid black;">
         This is another paragraph with a specified top margin in percent
      </p>
   </body>
</html>
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css13->id,
                'heading' => 'The margin-left Property',
		'heading_body'=> '<p>The margin-left property allows you set left margin of an element. It can have a value in length, &#37; or auto.</p>

<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <p style = "margin-left: 15px; border:1px solid black;">
         This is a paragraph with a specified left margin
      </p>
      
      <p style = "margin-left: 5%; border:1px solid black;">
         This is another paragraph with a specified top margin in percent
      </p>
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css13->id,
                'heading' => 'The margin-right Property',
		'heading_body'=> '<p>The margin-right property allows you set right margin of an element. It can have a value in length, &#37; or auto.</p>

<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>
   
   <body>
      <p style = "margin-right: 15px; border:1px solid black;">
         This is a paragraph with a specified right margin
      </p>
      <p style = "margin-right: 5%; border:1px solid black;">
         This is another paragraph with a specified right margin in percent
      </p>
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);



$css14 = Lesson::create([
        	'admin_id' => $admin,
        	'course_id' => 2,
                'title' => 'CSS Lists',
                'slug' => 'css_lists',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css14->id,
                'heading' => 'Lists',
		'heading_body'=> '<p>Lists are very helpful in conveying a set of either numbered or bullet points. This chapter teaches you how to control list type, position, style, etc., using CSS.</p>

<p>We have the following five CSS properties, which can be used to control lists &minus;</p>

<ul class="list">

<li><p>The <b>list-style-type</b> allows you to control the shape or appearance of the marker.</p></li>

<li><p>The <b>list-style-position</b> specifies whether a long point that wraps to a second line should align with the first line or start underneath the start of the marker.</p></li>

<li><p>The <b>list-style-image</b> specifies an image for the marker rather than a bullet point or number.</p></li>
<li><p>The <b>list-style</b> serves as shorthand for the preceding properties.</p></li>

<li><p>The <b>marker-offset</b> specifies the distance between a marker and the text in the list.</p></li>

</ul>

<p>Now, we will see how to use these properties with examples.</p>',
		'html_code' => '',
		'css_code' => '__________________', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css14->id,
                'heading' => 'The list-style-type Property',
		'heading_body'=> '<p>The <i>list-style-type</i> property allows you to control the shape or style of bullet point (also known as a marker) in the case of unordered lists and the style of numbering characters in ordered lists.</p>

<p>Here are the values which can be used for an unordered list &minus;</p>
<table class="table table-bordered">
<tr>
<th style="width:5%">Sr.No.</th>
<th style="text-align:center;">Value &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td><p><b>none</b></p>
<p>NA</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td><p><b>disc (default)</b></p>
<p>A filled-in circle</p></td>
</tr>
<tr>
<td class="ts">3</td>
<td><p><b>circle</b></p>
<p>An empty circle</p></td>
</tr>
<tr>
<td class="ts">4</td>
<td><p><b>square</b></p>
<p>A filled-in square</p></td>
</tr>
</table>
<p>Here are the values, which can be used for an ordered list &minus;</p>
<table class="table table-bordered">
<tr>
<th style="text-align:center;">Value</th>
<th style="text-align:center;">Description</th>
<th style="text-align:center;">Example</th>
</tr>
<tr>
<td>decimal</td>
<td>Number</td>
<td>1,2,3,4,5</td>
</tr>
<tr>
<td style="vertical-align:middle;">decimal-leading-zero</td>
<td style="vertical-align:middle;">0 before the number</td>
<td>01, 02, 03, 04, 05</td>
</tr>
<tr>
<td>lower-alpha</td>
<td>Lowercase alphanumeric characters</td>
<td>a, b, c, d, e</td>
</tr>
<tr>
<td style="vertical-align:middle;">upper-alpha</td>
<td style="vertical-align:middle;">Uppercase alphanumeric characters</td>
<td>A, B, C, D, E</td>
</tr>
<tr>
<td>lower-roman</td>
<td>Lowercase Roman numerals</td>
<td>i, ii, iii, iv, v</td>
</tr>
<tr>
<td style="vertical-align:middle;">upper-roman</td>
<td style="vertical-align:middle;">Uppercase Roman numerals</td>
<td>I, II, III, IV, V</td>
</tr>
<tr>
<td style="vertical-align:middle;">lower-greek</td>
<td style="vertical-align:middle;">The marker is lower-greek</td>
<td>alpha, beta, gamma</td>
</tr>
<tr>
<td>lower-latin</td>
<td>The marker is lower-latin</td>
<td>a, b, c, d, e</td>
</tr>
<tr>
<td>upper-latin</td>
<td>The marker is upper-latin</td>
<td>A, B, C, D, E</td>
</tr>
<tr>
<td>hebrew</td>
<td style="width:55%;">The marker is traditional Hebrew numbering</td>
<td>&nbsp;</td>
</tr>
<tr>
<td style="vertical-align:middle;">armenian</td>
<td>The marker is traditional Armenian numbering</td>
<td>&nbsp;</td>
</tr>
<tr>
<td style="vertical-align:middle;">georgian</td>
<td>The marker is traditional Georgian numbering</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>cjk-ideographic</td>
<td style="vertical-align:middle;">The marker is plain ideographic numbers</td>
<td>&nbsp;</td>
</tr>
<tr>
<td>hiragana</td>
<td>The marker is hiragana</td>
<td>a, i, u, e, o, ka, ki</td>
</tr>
<tr>
<td style="vertical-align:middle;">katakana</td>
<td style="vertical-align:middle;">The marker is katakana</td>
<td>A, I, U, E, O, KA, KI</td>
</tr>
<tr>
<td style="vertical-align:middle;">hiragana-iroha</td>
<td style="vertical-align:middle;">The marker is hiragana-iroha</td>
<td>i, ro, ha, ni, ho, he, to</td>
</tr>
<tr>
<td>katakana-iroha</td>
<td style="vertical-align:middle;">The marker is katakana-iroha</td>
<td>I, RO, HA, NI, HO, HE, TO</td>
</tr>
</table>
Here is an example &minus;',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>
   
   <body>
      <ul style = "list-style-type:circle;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ul style = "list-style-type:square;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style = "list-style-type:decimal;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
      
      <ol style = "list-style-type:lower-alpha;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
      
      <ol style = "list-style-type:lower-roman;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
</html>
<p>It will produce the following result &minus;</p> ', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css14->id,
                'heading' => 'The list-style-position Property',
		'heading_body'=> '<p>The <i>list-style-position</i> property indicates whether the marker should appear inside or outside of the box containing the bullet points. It can have one the two values &minus;</p>
<table class="table table-bordered">
<tr>
<th style="width:5%">Sr.No.</th>
<th style="text-align:center;">Value &amp; Description</th>
</tr>
<tr>
<td class="ts">1</td>
<td><p><b>none</b></p>
<p>NA</p></td>
</tr>
<tr>
<td class="ts">2</td>
<td><p><b>inside</b></p>
<p>If the text goes onto a second line, the text will wrap underneath the marker. It will also appear indented to where the text would have started if the list had a value of outside.</p></td>
</tr>
<tr>
<td class="ts">3</td>
<td><p><b>outside</b></p>
<p>If the text goes onto a second line, the text will be aligned with the start of the first line (to the right of the bullet).</p></td>
</tr>
</table>
<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>
   
   <body>
      <ul style = "list-style-type:circle; list-stlye-position:outside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ul style = "list-style-type:square;list-style-position:inside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style = "list-style-type:decimal;list-stlye-position:outside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
      
      <ol style = "list-style-type:lower-alpha;list-style-position:inside;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css14->id,
                'heading' => 'The list-style-image Property',
		'heading_body'=> '<p>The <i>list-style-image</i> allows you to specify an image so that you can use your own bullet style. The syntax is similar to the background-image property with the letters url starting the value of the property followed by the URL in brackets. If it does not find the given image then default bullets are used.</p>
	<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>
   
   <body>
      <ul>
         <li style = "list-style-image: url(/images/bullet.gif);">Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol>
         <li style = "list-style-image: url(/images/bullet.gif);">Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
</html> 
<p>It will produce the following result &minus;</p>', 
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css14->id,
                'heading' => 'The list-style Property',
		'heading_body'=> '<p>The <i>list-style</i> allows you to specify all the list properties into a single expression. These properties can appear in any order.</p>
<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>
   
   <body>
      <ul style = "list-style: inside square;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style = "list-style: outside upper-alpha;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
</html>  
<p>It will produce the following result &minus;</p>',
                'javascript_code' => '',
          	 ]);
Code::create([
        	'course_id' => $admin,
                'lesson_id' => $css14->id,
                'heading' => 'The marker-offset Property',
		'heading_body'=> '<p>The <i>marker-offset</i> property allows you to specify the distance between the marker and the text relating to that marker. Its value should be a length as shown in the following example &minus;</p>
<p>Unfortunately, this property is not supported in IE 6 or Netscape 7.</p>
<p>Here is an example &minus;</p>',
		'html_code' => '',
		'css_code' => '<html>
   <head>
   </head>

   <body>
      <ul style = "list-style: inside square; marker-offset:2em;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ul>
      
      <ol style = "list-style: outside upper-alpha; marker-offset:2cm;">
         <li>Maths</li>
         <li>Social Science</li>
         <li>Physics</li>
      </ol>
   </body>
</html> 
<p>It will produce the following result &minus;</p>',
                'javascript_code' => '',
          	 ]);











    }
}
