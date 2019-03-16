<?php

use Illuminate\Database\Seeder;
use \App\Lesson;
use \App\Code;

class HtmlLessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Lesson::truncate();
        $admin = \App\Admin::first()->id;


        $html1 = Lesson::create([
            'admin_id' => $admin,
            'course_id' => 1,
                'title' => 'HTML Tutorial',
                'slug' => 'html_tutorial',
             ]);

Code::create([
            'course_id' => $admin,
                'lesson_id'=> $html1->id,
                'heading' => 'HTML Tutorial',
        'heading_body'=> 'HTML stands for Hyper Text Markup Language, which is the most widely used language on Web to develop web pages. 
                HTML was created by Berners-Lee in late 1991 but "HTML 2.0" was the first standard HTML specification which was published 
                in 1995. HTML 4.01 was a major version of HTML and it was published in late 1999. Though HTML 4.01 version is widely used 
                but currently we are having HTML-5 version which is an extension to HTML 4.01, and this version was published in 2012.',
        'html_code' => '',
        'css_code' => '',
                'javascript_code' => ''
]);

Code::create([
            'course_id' => $admin,
                'lesson_id' => $html1->id,
                'heading' => 'Audience',
        'heading_body'=> 'This tutorial is designed for the aspiring Web Designers and Developers with a need to understand the HTML in enough 
                detail along with its simple overview, and practical examples. This tutorial will give you enough ingredients to start with 
                HTML from where you can take yourself at higher level of expertise.',
        'html_code' => '',
        'css_code' => '',
                'javascript_code' => ''
]);
Code::create([
            'course_id' => $admin,
                'lesson_id' => $html1->id,
        'heading' => 'Prerequisites',
        'heading_body'=> '<p>Before proceeding with this tutorial you should have a basic working knowledge with Windows or Linux operating system, 
                additionally you must be familiar with &minus;</p>
                <ul class="list">
                <li>Experience with any text editor like notepad, notepad&plus;&plus;, or Edit plus etc.</li>
                <li>How to create directories and files on your computer.</li>
                <li>How to navigate through different directories.</li>
                <li>How to type content in a file and save them on a computer.</li>
                <li>Understanding about images in different formats like JPEG, PNG format.</li>
                </ul>',
        'html_code' => '',
        'css_code' => '',
                'javascript_code' => ''

            ]
        );



$html2 = Lesson::create([
            'admin_id' => $admin,
            'course_id' => 1,
                'title' => 'HTML Overview',
                'slug' => 'html_overview',

            ]
        );


Code::create([
            'course_id' => 1,
                'lesson_id' => $html2->id,
                'heading' => 'HTML Overview',
        'heading_body' => '<p>HTML stands for <b><u>H</u></b>yper<b><u>t</u></b>ext <b><u>M</u></b>arkup <b><u>L</u></b>anguage, and it is the most widely used language to write Web Pages.</p>
                <ul class="list">
                <li><p><b>Hypertext</b> refers to the way in which Web pages (HTML documents) are linked together. Thus, the link available on a webpage is called Hypertext.</p></li>
                <li><p>As its name suggests, HTML is a <b>Markup Language</b> which means you use HTML to simply "mark-up" a text document with tags that tell a Web browser how to structure it to display.</p></li>
                </ul>
                <p>Originally, HTML was developed with the intent of defining the structure of documents like headings, paragraphs, lists, and so forth to facilitate the sharing of scientific information between researchers.</p>
                <p>Now, HTML is being widely used to format web pages with the help of different tags available in HTML language.</p>',
                'html_code' => '',
        'html_code' => '',
        'css_code' => '',
                'javascript_code' => ''
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html2->id,
                'heading' => 'Basic HTML Document',
        'heading_body' => ' <p>In its simplest form, following is an example of an HTML document &minus;</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>This is document title</title>
                </head>
    
                <body>
                    <h1>This is a heading</h1>
                    <p>Document content goes here.....</p>
                </body>
    
                </html>',
        'css_code' => '',
                'javascript_code' => ''
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html2->id,
        'heading' => 'HTML Document Structure',
        'heading_body' => 'A typical HTML document will have the following structure -',
        'html_code' => '<html>
   
                <head>
                    Document header related tags
                </head>
   
                <body>
                    Document body related tags
                </body>
   
                </html>',
        'css_code' => '',
                'javascript_code' => ''
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html2->id,
                'heading' => 'The <!DOCTYPE> Declaration',
        'heading_body' => 'The <!DOCTYPE> declaration tag is used by the web browser to understand the version of the HTML used in the document. Current version of HTML is 5 and it makes use of the following declaration -',
        'html_code' => '<!DOCTYPE html>',
                'css_code' => '',
                'javascript_code' => ''

            ]
        );

$html3 = Lesson::create([
            'admin_id' => $admin,
            'course_id' => 1,
                'title' => 'HTML Basic Tags',
                'slug' => 'html_basic_tags',
            ]
        );
Code::create([
            'course_id' => 1,
                'lesson_id' => $html3->id,
                'heading' => 'Heading Tags',
                'heading_body' => '<p>Any document starts with a heading. You can use different sizes for your headings. HTML also has six levels of headings, which use the elements <b>&lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt;,</b> and <b>&lt;h6&gt;</b>. While displaying any heading, browser adds one line before and one line after that heading.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Heading Example</title>
                </head>
    
                <body>
                    <h1>This is heading 1</h1>
                    <h2>This is heading 2</h2>
                    <h3>This is heading 3</h3>
                    <h4>This is heading 4</h4>
                    <h5>This is heading 5</h5>
                    <h6>This is heading 6</h6>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '',
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html3->id,
        'heading' => 'Paragraph Tag',
        'heading_body' => 'The <p> tag offers a way to structure your text into different paragraphs. Each paragraph of text should go in between an opening <p> and a closing </p> tag as shown below in the example -',   
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Paragraph Example</title>
                </head>
    
                <body>
                    <p>Here is a first paragraph of text.</p>
                    <p>Here is a second paragraph of text.</p>
                    <p>Here is a third paragraph of text.</p>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '',
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html3->id,
        'heading' => 'Line Break Tag',
        'heading_body' => '<p>Whenever you use the <b>&lt;br /&gt;</b> element, anything following it starts from the next line. This tag is an example of an <b>empty</b> element, where you do not need opening and closing tags, as there is nothing to go in between them.</p>
                <p>The &lt;br /&gt; tag has a space between the characters <b>br</b> and the forward slash. If you omit this space, older browsers will have trouble rendering the line break, while if you miss the forward slash character and just use &lt;br&gt; it is not valid in XHTML.</p>',
        'html_code'=> '<!DOCTYPE html>
                <html>

                <head>
                    <title>Line Break  Example</title>
                </head>
    
                <body>
                    <p>Hello<br />
                    Nice meting you.<br />
                    Thanks for coming<br />
                    Reden</p>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '',
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html3->id,
        'heading' => 'Centering Content',
        'heading_body' => '<p>You can use <center> tag to put any content in the center of the page or any table cell.</p>',
        'html_code'=> ' <!DOCTYPE html>
                <html>

                <head>
                    <title>Centring Content Example</title>
                </head>
    
                <body>
                    <p>This text is not in the center.</p>
      
                    <center>
                    <p>This text is in the center.</p>
                    </center>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '',
]);
Code::create([
        'course_id' => 1,
        'lesson_id' => $html3->id,
        'heading' => 'Horizontal Lines',
        'heading_body' => '<p>Horizontal lines are used to visually break-up sections of a document. The <b>&lt;hr&gt;</b> tag creates a line from the current position in the document to the right margin and breaks the line accordingly.</p>
                <p>For example, you may want to give a line between two paragraphs as in the given example below &minus;</p>',
        'html_code'=> '<!DOCTYPE html>
                <html>

                <head>
                    <title>Horizontal Line Example</title>
                </head>
    
                <body>
                    <p>This is paragraph one and should be on top</p>
                    <hr />
                    <p>This is paragraph two and should be at bottom</p>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '',
]);
Code::create([
        'course_id' => 1,
        'lesson_id' => $html3->id,
        'heading_body' => 'Again <hr /> tag is an example of the empty element, where you do not need opening and closing tags, as there is nothing to go in between them.
                The <hr /> element has a space between the characters hr and the forward slash. If you omit this space, older browsers will have trouble rendering the horizontal line, while if you miss the forward slash character and just use <hr> it is not valid in XHTML',
        'heading' => 'Preserve Formatting',
        'heading_body' => ' <p>Sometimes, you want your text to follow the exact format of how it is written in the HTML document. In these cases, you can use the preformatted tag <b>&lt;pre&gt;</b>.</p>
                <p>Any text between the opening <b>&lt;pre&gt;</b> tag and the closing <b>&lt;/pre&gt;</b> tag will preserve the formatting of the source document.</p>',
        'html_code'=> '<!DOCTYPE html>
                <html>

                <head>
                    <title>Preserve Formatting Example</title>
                </head>
    
                <body>
                    <pre>
                    function testFunction( strText ){
                        alert (strText)
                    }
                    </pre>
                </body>
    
                </html>',

        'css_code' => '',
                'javascript_code' => ''
            ]
        );

$html4 = Lesson::create([
            'admin_id' => $admin,
            'course_id' => 1,
                'title' => 'HTML - Elements',
                'slug' => 'html_elements',
                
            ]
        );
Code::create([
            'course_id' => 1,
                'lesson_id' => $html4->id,
                'heading' => 'HTML - Elements',
        'heading_body' => 'An HTML element is defined by a starting tag. If the element contains other content, it ends with a closing tag, where the element name is preceded by a forward slash as shown below with few tags -',
                'html_code' => '<table class="table table-bordered">
                <tr>
                <th style="text-align:center;">Start Tag</th>
                <th style="text-align:center;">Content</th>
                <th style="text-align:center;">End Tag</th>
                </tr>
                <tr>
                <td>&lt;p&gt;</td>
                <td>This is paragraph content.</td>
                <td>&lt;/p&gt;</td>
                </tr>
                <tr>
                <td>&lt;h1&gt;</td>
                <td>This is heading content.</td>
                <td>&lt;/h1&gt;</td>
                </tr>
                <tr>
                <td>&lt;div&gt;</td>
                <td>This is division content.</td>
                <td>&lt;/div&gt;</td>
                </tr>
                <tr>
                <td>&lt;br /&gt;</td>
                <td></td>
                <td></td>
                </tr>
                </table>',
        'css_code' => '',
        'javascript_code' => '',
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html4->id,
        'heading' => 'HTML Tag vs. Element',
        'heading_body' => '<p>An HTML element is defined by a <i>starting tag</i>. If the element contains other content, it ends with a <i>closing tag</i>.</p>
                <p>For example, <b>&lt;p&gt;</b> is starting tag of a paragraph and <b>&lt;/p&gt;</b> is closing tag of the same paragraph but <b>&lt;p&gt;This is paragraph&lt;/p&gt;</b> is a paragraph element.</p>',
                'html_code' =>'',
        'css_code' => '',
        'javascript_code' => '',
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html4->id,
        'heading' => 'Nested HTML Elements',
        'heading_body' => '<p>It is very much allowed to keep one HTML element inside another HTML element &minus;</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Nested Elements Example</title>
                </head>
    
                <body>
                    <h1>This is <i>italic</i> heading</h1>
                    <p>This is <u>underlined</u> paragraph</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => ''

            ]
        );

$html5 =Lesson::create([
            'admin_id' => $admin,
            'course_id' => 1,
                'title' => 'HTML Attributes',
                'slug' => 'html_attributes',             
            ]
        );
Code::create([
            'course_id' => 1,
                'lesson_id' => $html5->id,
                'heading' => 'HTML Attributes',
        'heading_body' => '<p>We have seen few HTML tags and their usage like heading tags <b>&lt;h1&gt;, &lt;h2&gt;,</b> paragraph tag <b>&lt;p&gt;</b> and other tags. We used them so far in their simplest form, but most of the HTML tags can also have attributes, which are extra bits of information.</p> 
                <p>An attribute is used to define the characteristics of an HTML element and is placed inside the element\'s opening tag. All attributes are made up of two parts &minus; a <b>name</b> and a <b>value</b></p>
                <ul class="list">
                <li><p>The <b>name</b> is the property you want to set. For example, the paragraph <b>&lt;p&gt;</b> element in the example carries an attribute whose name is <b>align</b>, which you can use to indicate the alignment of paragraph on the page.</p></li>
                <li><p>The <b>value</b> is what you want the value of the property to be set and always put within quotations. The below example shows three possible values of align attribute: <b> left, center</b> and <b>right</b>.</p></li>
                </ul>
                <p>Attribute names and attribute values are case-insensitive. However, the World Wide Web Consortium (W3C) recommends lowercase attributes/attribute values in their HTML 4 recommendation.</p>',
                'html_code' => '<!DOCTYPE html> 
                <html>
 
                <head> 
                    <title>Align Attribute  Example</title> 
                </head>
    
                <body> 
                    <p align = "left">This is left aligned</p> 
                    <p align = "center">This is center aligned</p> 
                    <p align = "right">This is right aligned</p> 
                </body>
    
                </html>
',
        'css_code' => '',
        'javascript_code' => '',
]);

Code::create([
            'course_id' => 1,
                'lesson_id' => $html5->id,
        'heading' => 'Core Attributes',
        'heading_body' => '<p>The four core attributes that can be used on the majority of HTML elements (although not all) are &minus;</p>
                <ul class="list">
                <li>Id</li>
                <li>Title</li>
                <li>Class</li>
                <li>Style</li>
                </ul>',
                'html_code' =>'',
        'css_code' => '',
        'javascript_code'=> '',
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html5->id,
        'heading' => 'The Id Attribute',
        'heading_body' => '<p>The <b>id</b> attribute of an HTML tag can be used to uniquely identify any element within an HTML page. There are two primary reasons that you might want to use an id attribute on an element &minus;</p>
                <ul class="list">
                <li><p>If an element carries an id attribute as a unique identifier, it is possible to identify just that element and its content.</p></li>
                <li><p>If you have two elements of the same name within a Web page (or style sheet), you can use the id attribute to distinguish between elements that have the same name.</p></li>
                </ul>
                <p>We will discuss style sheet in separate tutorial. For now, let\'s use the id attribute to distinguish between two paragraph elements as shown below.</p>',

                'html_code' => '<p id = "html">This para explains what is HTML</p>
                <p id = "css">This para explains what is Cascading Style Sheet</p>',
        'css_code' => '',
        'javascript_code' => '',
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html5->id,
        'heading' => 'The title Attribute',
        'heading_body' => '<p>The <b>title</b> attribute gives a suggested title for the element. They syntax for the <b>title</b> attribute is similar as explained for <b>id</b> attribute &minus;</p>
                <p>The behavior of this attribute will depend upon the element that carries it, although it is often displayed as a tooltip when cursor comes over the element or while the element is loading.</p>',
        'html_code' =>  '<!DOCTYPE html>
                <html>

                <head>
                    <title>The title Attribute Example</title>
                </head>
    
                <body>
                    <h3 title = "Hello HTML!">Titled Heading Tag Example</h3>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '', 
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html5->id,
        'heading' => 'The class Attribute',
        'heading_body' => '<p>The <b>class</b> attribute is used to associate an element with a style sheet, and specifies the class of element. You will learn more about the use of the class attribute when you will learn Cascading Style Sheet (CSS). So for now you can avoid it.</p>
                <p>The value of the attribute may also be a space-separated list of class names. For example &minus;</p>',
        'html_code' =>  'class = "className1 className2 className3"',
        'css_code' => '',
        'javascript_code' => '', 
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html5->id,
        'heading' => 'The style Attribute',
        'heading_body' => '<p>The style attribute allows you to specify Cascading Style Sheet (CSS) rules within the element.</p>',
        'html_code' =>  '<!DOCTYPE html>
                <html>

                <head>
                    <title>The style Attribute</title>
                </head>
    
                <body>
                    <p style = "font-family:arial; color:#FF0000;">Some text...</p>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '', 
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html5->id,
        'heading' => 'Internationalization Attributes',
        'heading_body' => '<p>There are three internationalization attributes, which are available for most (although not all) XHTML elements.</p>
                <ul class="list">
                <li>dir</li>
                <li>lang</li>
                <li>xml:lang </li>
                </ul>',
        'html_code' =>  '',
        'css_code' => '',
        'javascript_code' => '', 
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html5->id,
        'heading' => 'The dir Attribute',
        'heading_body' => '<p>The <b>dir</b> attribute allows you to indicate to the browser about the direction in which the text should flow. The dir attribute can take one of two values, as you can see in the table that follows &minus;</p>
                <table class="table table-bordered">
                <tr>
                <th style="text-align:center;">Value</th>
                <th style="text-align:center;">Meaning</th>
                </tr>
                <tr>
                <td>ltr</td>
                <td>Left to right (the default value)</td>
                </tr>
                <tr>
                <td>rtl</td>
                <td>Right to left (for languages such as Hebrew or Arabic that are read right to left)</td>
                </tr>
                </table>',
        'html_code' => '<!DOCTYPE html>
                <html dir = "rtl">

                <head>
                    <title>Display Directions</title>
                </head>
    
                <body>
                    This is how IE 5 renders right-to-left directed text.
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '', 
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html5->id,
        'heading' => 'The lang Attribute',
        'heading_body' => '<p>The <b>lang</b> attribute allows you to indicate the main language used in a document, but this attribute was kept in HTML only for backwards compatibility with earlier versions of HTML. This attribute has been replaced by the <b>xml:lang</b> attribute in new XHTML documents.</p>
                <p>The values of the <i>lang</i> attribute are ISO-639 standard two-character language codes. Check <a href="/html/language_iso_codes.htm"><b>HTML Language Codes: ISO 639</b></a> for a complete list of language codes.</p>',
        'html_code' => '<!DOCTYPE html>
                <html lang = "en">

                <head>
                    <title>English Language Page</title>
                </head>

                <body>
                    This page is using English Language
                </body>

                </html>',
        'css_code' => ' ',
                'javascript_code' => ' '

            ]
        );

$html6 = Lesson::create([
            'admin_id' => $admin,
            'course_id' => 1,
                'title' => 'HTML Formatting',
                'slug' => 'html_formatting',
            ]
        );
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
                'heading' => 'HTML Formatting',
        'heading_body' => '<p>If you use a word processor, you must be familiar with the ability to make text bold, italicized, or underlined; these are just three of the ten options available to indicate how text can appear in HTML and XHTML.</p>
',
        'html_code' =>  '',
        'css_code' => '',
        'javascript_code' => '', 
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Bold Text',
        'heading_body' => '<p>Anything that appears within <b>&lt;b&gt;...&lt;/b&gt;</b> element, is displayed in bold as shown below &minus;</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Bold Text Example</title>
                </head>
    
                <body>
                    <p>The following word uses a <b>bold</b> typeface.</p>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '', 
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Italic Text',
        'heading_body' => '<p>Anything that appears within <b>&lt;i&gt;...&lt;/i&gt;</b> element is displayed in italicized as shown below &minus;</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Italic Text Example</title>
                </head>
    
                <body>
                    <p>The following word uses an <i>italicized</i> typeface.</p>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '', 
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Underlined Text',
        'heading_body' => '<p>Anything that appears within <b>&lt;u&gt;...&lt;/u&gt;</b> element, is displayed with underline as shown below &minus;</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Underlined Text Example</title>
                </head>
    
                <body>
                    <p>The following word uses an <u>underlined</u> typeface.</p>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '',
]); 
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Strike Text',
        'heading_body' => '<p>Anything that appears within <b>&lt;strike&gt;...&lt;/strike&gt;</b> element is displayed with strikethrough, which is a thin line through the text as shown below &minus;</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Strike Text Example</title>
                </head>
    
                <body>
                    <p>The following word uses a <strike>strikethrough</strike> typeface.</p>
                </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '', 
]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Monospaced Font',
        'heading_body' => '<p>The content of a <b>&lt;tt&gt;...&lt;/tt&gt;</b> element is written in monospaced font. Most of the fonts are known as variable-width fonts because different letters are of different widths (for example, the letter "m" is wider than the letter "i"). In a monospaced font, however, each letter has the same width.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Monospaced Font Example</title>
                </head>
    
                <body>
                    <p>The following word uses a <tt>monospaced</tt> typeface.</p>
                    </body>
    
                </html>',
        'css_code' => '',
        'javascript_code' => '',
]); 
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Superscript Text',
        'heading_body' => '<p>The content of a <b>&lt;sup&gt;...&lt;/sup&gt;</b> element is written in superscript; the font size used is the same size as the characters surrounding it but is displayed half a character\'s height above the other characters.</p>',
        'html_code' => '<!DOCTYPE html>
        <html>

        <head>
            <title>Superscript Text Example</title>
        </head>

        <body>
            <p>The following word uses a <sup>superscript</sup> typeface.</p>
        </body>

        </html>',
        'css_code' => '',
        'javascript_code' => '',
        ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Subscript Text',
        'heading_body' => '<p>The content of a <b>&lt;sub&gt;...&lt;/sub&gt;</b> element is written in subscript; the font size used is the same as the characters surrounding it, but is displayed half a character\'s height beneath the other characters.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Subscript Text Example</title>
                </head>
    
                <body>
                    <p>The following word uses a <sub>subscript</sub> typeface.</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Inserted Text',
        'heading_body' => '<p>Anything that appears within <b>&lt;ins&gt;...&lt;/ins&gt;</b> element is displayed as inserted text.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Inserted Text Example</title>
                </head>
    
                <body>
                    <p>I want to drink <del>cola</del> <ins>wine</ins></p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Deleted Text',
        'heading_body' => '<p>Anything that appears within <b>&lt;del&gt;...&lt;/del&gt;</b> element, is displayed as deleted text.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Deleted Text Example</title>
                </head>
    
                <body>
                    <p>I want to drink <del>cola</del> <ins>wine</ins></p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Larger Text',
        'heading_body' => '<p>The content of the <b>&lt;big&gt;...&lt;/big&gt;</b> element is displayed one font size larger than the rest of the text surrounding it as shown below &minus;</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Larger Text Example</title>
                </head>
    
                <body>
                    <p>The following word uses a <big>big</big> typeface.</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Smaller Text',
        'heading_body' => '<p>The content of the <b>&lt;small&gt;...&lt;/small&gt;</b> element is displayed one font size smaller than the rest of the text surrounding it as shown below &minus;</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Smaller Text Example</title>
                </head>

                <body>
                    <p>The following word uses a <small>small</small> typeface.</p>
                </body>

                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html6->id,
        'heading' => 'Grouping Content',
        'heading_body' => '<p>The <b>&lt;div&gt;</b> and <b>&lt;span&gt;</b> elements allow you to group together several elements to create sections or subsections of a page.</p>
                <p>For example, you might want to put all of the footnotes on a page within a &lt;div&gt; element to indicate that all of the elements within that &lt;div&gt; element relate to the footnotes. You might then attach a style to this &lt;div&gt; element so that they appear using a special set of style rules.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Div Tag Example</title>
                </head>
    
                <body>
                    <div id = "menu" align = "middle" >
                        <a href = "/index.htm">HOME</a> | 
                        <a href = "/about/contact_us.htm">CONTACT</a> | 
                        <a href = "/about/index.htm">ABOUT</a>
                    </div>

                    <div id = "content" align = "left" bgcolor = "white">
                        <h5>Content Articles</h5>
                        <p>Actual content goes here.....</p>
                    </div>
                </body>
    
                </html>',

                'css_code' => '',
                'javascript_code' => '',
]);


$html7 = Lesson::create([
            'admin_id' => $admin,
            'course_id' => 1,
                'title' => 'HTML Phrase Tags',
                'slug' => 'html_phrase_tags',
            ]
        );
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
                'heading' => 'HTML Phrase Tags',
        'heading_body' => '<p>The phrase tags have been desicolgned for specific purposes, though they are displayed in a similar way as other basic tags like <b>&lt;b&gt;, &lt;i&gt;, &lt;pre&gt;</b>, and <b>&lt;tt&gt;</b>, you have seen in previous chapter. This chapter will take you through all the important phrase tags, so let\'s start seeing them one by one.</p>
',
        'html_code'=> '',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Emphasized Text',
        'heading_body' => '<p>Anything that appears within <b>&lt;em&gt;...&lt;/em&gt;</b> element is displayed as emphasized text.</p>',
        'html_code' => '<!DOCTYPE html>
        <html>

        <head>
            <title>Emphasized Text Example</title>
            </head>
    
            <body>
            <p>The following word uses an <em>emphasized</em> typeface.</p>
            </body>',
                'css_code' => '',
                'javascript_code' => '',
    ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Marked Text',
        'heading_body' => '<p>Anything that appears with-in <b>&lt;mark&gt;...&lt;/mark&gt;</b> element, is displayed as marked with yellow ink.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Marked Text Example</title>
                </head>
    
                <body>
                    <p>The following word has been <mark>marked</mark> with yellow</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',

                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Strong Text',
        'heading_body' => '<p>Anything that appears within <b>&lt;strong&gt;...&lt;/strong&gt;</b> element is displayed as important text.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Strong Text Example</title>
                </head>
    
                <body>
                    <p>The following word uses a <strong>strong</strong> typeface.</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Text Abbreviation',
        'heading_body' => '<p>You can abbreviate a text by putting it inside opening &lt;abbr&gt; and closing &lt;/abbr&gt; tags. If present, the title attribute must contain this full description and nothing else.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Text Abbreviation</title>
                </head>
    
                <body>
                    <p>My best friend\'s name is  <abbr title = "Abhishek">Abhy</abbr>.</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Acronym Element',
        'heading_body' => '<p>The <b>&lt;acronym&gt;</b> element allows you to indicate that the text between &lt;acronym&gt; and &lt;/acronym&gt; tags is an acronym.</p>
                <p>At present, the major browsers do not change the appearance of the content of the &lt;acronym&gt; element.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Acronym Example</title>
                </head>
    
                <body>
                    <p>This chapter covers marking up text in <acronym>XHTML</acronym>.</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Text Direction',
        'heading_body' => '<p>The <b>&lt;bdo&gt;...&lt;/bdo&gt;</b> element stands for Bi-Directional Override and it is used to override the current text direction.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Text Direction Example</title>
                </head>

                <body>
                    <p>This text will go left to right.</p>
                    <p><bdo dir = "rtl">This text will go right to left.</bdo></p>
                </body>

                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Special Terms',
        'heading_body' => '<p>The <b>&lt;dfn&gt;...&lt;/dfn&gt;</b> element (or HTML Definition Element) allows you to specify that you are introducing a special term. It\'s usage is similar to italic words in the midst of a paragraph.</p>
                <p>Typically, you would use the &lt;dfn&gt; element the first time you introduce a key term. Most recent browsers render the content of a &lt;dfn&gt; element in an italic font.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Special Terms Example</title>
                </head>
    
                <body>
                    <p>The following word is a <dfn>special</dfn> term.</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Quoting Text',
        'heading_body' => '<p>When you want to quote a passage from another source, you should put it in between <b>&lt;blockquote&gt;...&lt;/blockquote&gt;</b> tags.</p>
                <p>Text inside a &lt;blockquote&gt; element is usually indented from the left and right edges of the surrounding text, and sometimes uses an italicized font.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Blockquote Example</title>
                </head>
    
                <body>
                    <p>The following description of XHTML is taken from the W3C Web site:</p>

                    <blockquote>XHTML 1.0 is the W3C\'s first Recommendation for XHTML,following on 
                        from earlier work on HTML 4.01, HTML 4.0, HTML 3.2 and HTML 2.0.</blockquote>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);

Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Short Quotations',
        'heading_body' => '<p>The <b>&lt;q&gt;...&lt;/q&gt;</b> element is used when you want to add a double quote within a sentence.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Double Quote Example</title>
                </head>
    
                <body>
                    <p>Amit is in Spain, <q>I think I am wrong</q>.</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Text Citations',
        'heading_body' => '<p>If you are quoting a text, you can indicate the source placing it between an opening <b>&lt;cite&gt;</b> tag and closing <b>&lt;/cite&gt;</b> tag</p>
                <p>As you would expect in a print publication, the content of the &lt;cite&gt; element is rendered in italicized text by default.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>
   
                <head>
                    <title>Citations Example</title>
                </head>
   
                <body>
                    <p>This HTML tutorial is derived from <cite>W3 Standard for HTML</cite>.</p>
                </body>
   
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Computer Code',
        'heading_body' => '<p>Any programming code to appear on a Web page should be placed inside <b>&lt;code&gt;...&lt;/code&gt;</b> tags. Usually the content of the &lt;code&gt; element is presented in a monospaced font, just like the code in most programming books.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>
   
                <head>
                    <title>Computer Code Example</title>
                </head>
   
                <body>
                    <p>Regular text. <code>This is code.</code> Regular text.</p>
                </body>
   
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Keyboard Text',
        'heading_body' => '<p>When you are talking about computers, if you want to tell a reader to enter some text, you can use the <b>&lt;kbd&gt;...&lt;/kbd&gt;</b> element to indicate what should be typed in, as in this example.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>
   
                <head>
                    <title>Keyboard Text Example</title>
                </head>
   
                <body>
                    <p>Regular text. <kbd>This is inside kbd element</kbd> Regular text.</p>
                </body>
   
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Programming Variables',
        'heading_body' => '<p>This element is usually used in conjunction with the <b>&lt;pre&gt;</b> and <b>&lt;code&gt;</b> elements to indicate that the content of that element is a variable.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>
   
                <head>
                    <title>Variable Text Example</title>
                </head>
   
                <body>
                    <p><code>document.write("<var>user-name</var>")</code></p>
                </body>
   
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Program Output',
        'heading_body' => '<p>The <b>&lt;samp&gt;...&lt;/samp&gt;</b> element indicates sample output from a program, and script etc. Again, it is mainly used when documenting programming or coding concepts.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>
   
                    <head>
                    <title>Program Output Example</title>
                    </head>
   
                    <body>
                    <p>Result produced by the program is <samp>Hello World!</samp></p>
                    </body>
   
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html7->id,
        'heading' => 'Address Text',
        'heading_body' => '<p>The <b>&lt;address&gt;...&lt;/address&gt;</b> element is used to contain any address.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>
   
                    <head>
                        <title>Address Example</title>
                    </head>
   
                    <body>
                        <address>388A, Road No 22, Jubilee Hills -  Hyderabad</address>
                    </body>
   
                     </html>',
                'css_code' => '',
                'javascript_code' => '',

            ]
        );

$html8 = Lesson::create([
                'admin_id' => $admin,
                'course_id' => 1,
                'title' => 'HTML Meta Tags',
                'slug' => 'html_meta_tags',
            ]
        );
Code::create([
            'course_id' => 1,
            'lesson_id' => $html8->id,
            'heading' => 'HTML Meta Tags',
            'heading_body' => '<p>HTML lets you specify metadata - additional important information about a document in a variety of ways. The META elements can be used to include name/value pairs describing properties of the HTML document, such as author, expiry date, a list of keywords, document author etc.</p>
            <p>The <b>&lt;meta&gt;</b> tag is used to provide such additional information. This tag is an empty element and so does not have a closing tag but it carries information within its attributes.</p>
            <p>You can include one or more meta tags in your document based on what information you want to keep in your document but in general, meta tags do not impact physical appearance of the document so from appearance point of view, it does not matter if you include them or not.</p>',
            'html_code'=> '',
            'css_code' => '',
            'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,

                'heading' => 'Adding Meta Tags to Your Documents',
                'heading_body' => '<p>You can add metadata to your web pages by placing &lt;meta&gt; tags inside the header of the document which is represented by <b>&lt;head&gt;</b> and <b>&lt;/head&gt;</b> tags. A meta tag can have following attributes in addition to core attributes &minus;</p>
                <table class="table table-bordered">
                <tr>
                <th>Sr.No</th>
                <th style="text-align:center;">Attribute &amp; Description</th>
                </tr>
                <tr>
                <td class="ts">1</td>
                <td>
                <p><b>Name</b></p>
                <p>Name for the property. Can be anything. Examples include, keywords, description, author, revised, generator etc.</p>
                </td>
                </tr>
                <tr>
                <td class="ts">2</td>
                <td>
                <p><b>content</b></p>
                <p>Specifies the property\'s value.</p>
                </td>
                </tr>
                <tr>
                <td class="ts">3</td>
                <td>
                <p><b>scheme</b></p>
                <p>Specifies a scheme to interpret the property\'s value (as declared in the content attribute).</p>
                </td>
                </tr>
                <tr>
                <td class="ts">4</td>
                <td>
                <p><b>http-equiv</b></p>
                <p>Used for http response message headers. For example, http-equiv can be used to refresh the page or to set a cookie. Values include content-type, expires, refresh and set-cookie.</p>
                </td>
                </tr>
                </table>',
        'html_code'=> '',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,
                'heading' => 'Specifying Keywords',
                'heading_body' => '<p>You can use &lt;meta&gt; tag to specify important keywords related to the document and later these keywords are used by the search engines while indexing your webpage for searching purpose.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>
   
                <head>
                    <title>Meta Tags Example</title>
                    <meta name = "keywords" content = "HTML, Meta Tags, Metadata" />
                </head>
   
                <body>
                    <p>Hello HTML5!</p>
                </body>
   
                </html>
',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,
                'heading' => 'Document Description',
                'heading_body' => '<p>You can use &lt;meta&gt; tag to give a short description about the document. This again can be used by various search engines while indexing your webpage for searching purpose.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Meta Tags Example</title>
                    <meta name = "keywords" content = "HTML, Meta Tags, Metadata" />
                    <meta name = "description" content = "Learning about Meta Tags." />
                </head>
    
                <body>
                    <p>Hello HTML5!</p>
                </body>
   
                </html>
',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,
                'heading' => 'Document Revision Date',
                'heading_body' => '<p>You can use &lt;meta&gt; tag to give information about when last time the document was updated. This information can be used by various web browsers while refreshing your webpage.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Meta Tags Example</title>
                    <meta name = "keywords" content = "HTML, Meta Tags, Metadata" />
                    <meta name = "description" content = "Learning about Meta Tags." />
                    <meta name = "revised" content = "Tutorialspoint, 3/7/2014" />
                </head>
    
                <body>
                    <p>Hello HTML5!</p>
                </body>
    
                </html>
',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,
                'heading' => 'Document Refreshing',
                'heading_body' => '<p>A &lt;meta&gt; tag can be used to specify a duration after which your web page will keep refreshing automatically.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Meta Tags Example</title>
                    <meta name = "keywords" content = "HTML, Meta Tags, Metadata" />
                    <meta name = "description" content = "Learning about Meta Tags." />
                    <meta name = "revised" content = "Tutorialspoint, 3/7/2014" />
                </head>
    
                <body>
                    <p>Hello HTML5!</p>
                </body>
    
                </html>
',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,
                'heading' => 'Page Redirection',
                'heading_body' => '<p>You can use &lt;meta&gt; tag to redirect your page to any other webpage. You can also specify a duration if you want to redirect the page after a certain number of seconds.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Meta Tags Example</title>
                    <meta name = "keywords" content = "HTML, Meta Tags, Metadata" />
                    <meta name = "description" content = "Learning about Meta Tags." />
                    <meta name = "revised" content = "Tutorialspoint, 3/7/2014" />
                </head>
    
                <body>
                    <p>Hello HTML5!</p>
                </body>
    
                </html>
',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,
                'heading' => 'Setting Cookies',
                'heading_body' => '<p>Cookies are data, stored in small text files on your computer and it is exchanged between web browser and web server to keep track of various information based on your web application need.</p>
                <p>You can use &lt;meta&gt; tag to store cookies on client side and later this information can be used by the Web Server to track a site visitor.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Meta Tags Example</title>
                    <meta name = "keywords" content = "HTML, Meta Tags, Metadata" />
                    <meta name = "description" content = "Learning about Meta Tags." />
                    <meta name = "revised" content = "Tutorialspoint, 3/7/2014" />
                </head>
    
                <body>
                    <p>Hello HTML5!</p>
                </body>
    
                </html>
',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,
                'heading' => 'Setting Author Name',
                'heading_body' => '<p>You can set an author name in a web page using meta tag. See an example below &minus;</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Meta Tags Example</title>
                    <meta name = "keywords" content = "HTML, Meta Tags, Metadata" />
                    <meta name = "description" content = "Learning about Meta Tags." />
                    <meta name = "author" content = "Mahnaz Mohtashim" />
                </head>
    
                <body>
                    <p>Hello HTML5!</p>
                </body>
    
                </html>
',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,
                'heading' => 'Specify Character Set',
                'heading_body' => '<p>You can use &lt;meta&gt; tag to specify character set used within the webpage.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                    <head>
                    <title>Meta Tags Example</title>
                    <meta name = "keywords" content = "HTML, Meta Tags, Metadata" />
                    <meta name = "description" content = "Learning about Meta Tags." />
                    <meta name = "author" content = "Mahnaz Mohtashim" />
                    <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8" />
                    </head>
    
                    <body>
                        <p>Hello HTML5!</p>
                    </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' => '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html8->id,
                'heading' => 'Specify Character Set',
        'heading_body' => '<p>To serve the static page with traditional Chinese characters, the webpage must contain a &lt;meta&gt; tag to set Big5 encoding &minus;</p>',
                'html_code' => '<!DOCTYPE html>
                    <html>

                    <head>
                        <title>Meta Tags Example</title>
                        <meta name = "keywords" content = "HTML, Meta Tags, Metadata" />
                        <meta name = "description" content = "Learning about Meta Tags." />
                        <meta name = "author" content = "Mahnaz Mohtashim" />
                        <meta http-equiv = "Content-Type" content = "text/html; charset = Big5" />
                    </head>
                    <body>
                        <p>Hello HTML5!</p>
                    </body>
    
                    </html>
',
                'css_code' => '',
                'javascript_code' =>  '',
            ]
        );
$html9 = Lesson::create([
            'admin_id' => $admin,
            'course_id' => 1,
                'title' => 'HTML Comments',
                'slug' => 'html_comments',
            ]
        );
Code::create([
            'course_id' => 1,
                'lesson_id' => $html9->id,
                'heading' => 'HTML Comments',
                'heading_body' => '<p>Comment is a piece of code which is ignored by any web browser. It is a good practice to add comments into your HTML code, especially in complex documents, to indicate sections of a document, and any other notes to anyone looking at the code. Comments help you and others understand your code and increases code readability.</p>
                <p>HTML comments are placed in between <b>&lt;!-- ... --&gt;</b> tags. So, any content placed with-in &lt;!-- ... --&gt; tags will be treated as comment and will be completely ignored by the browser.</p>',
                'html_code' => '<!DOCTYPE html>
                <html>

                <head>  <!-- Document Header Starts -->
                    <title>This is document title</title>
                </head> <!-- Document Header Ends -->
    
                <body>
                    <p>Document content goes here.....</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' =>  '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html9->id,
        'heading' => 'Valid vs Invalid Comments',
                'heading_body' => '<p>Comments do not nest which means a comment cannot be put inside another comment. Second the double-dash sequence "--" may not appear inside a comment except as part of the closing --&gt; tag. You must also make sure that there are no spaces in the start-of comment string.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Valid Comment Example</title>
                    </head>
    
                    <body>
                    <!--   This is valid comment -->
                    <p>Document content goes here.....</p>
                    </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' =>  '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html9->id,
        'heading' => 'Valid vs Invalid Comments',
        'heading_body' => '<p>But, following line is not a valid comment and will be displayed by the browser. This is because there is a space between the left angle bracket and the exclamation mark.</p> ',       
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>  
                    <title>Invalid Comment Example</title>
                </head>
    
                <body>
                    < !--   This is not a valid comment -->
                    <p>Document content goes here.....</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' =>  '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html9->id,
        'heading' => 'Multiline Comments',
                'heading_body' => '<p>So far we have seen single line comments, but HTML supports multi-line comments as well.</p>
                <p>You can comment multiple lines by the special beginning tag &lt;!-- and ending tag --&gt; placed before the first line and end of the last line as shown in the given example below.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>  
                    <title>Multiline Comments</title>
                </head> 
    
                <body>
                    <!-- 
                        This is a multiline comment and it can
                        span through as many as lines you like.
                    -->
      
                    <p>Document content goes here.....</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' =>  '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html9->id,
        'heading' => 'Conditional Comments',
                'heading_body' => '<p>Conditional comments only work in Internet Explorer (IE) on Windows but they are ignored by other browsers. They are supported from Explorer 5 onwards, and you can use them to give conditional instructions to different versions of IE.</p>', 
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>  
                    <title>Conditional Comments</title>

                    <!--[if IE 6]>
                        Special instructions for IE 6 here
                    <![endif]-->
                </head> 
   
                <body>
                    <p>Document content goes here.....</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' =>  '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html9->id,
        'heading' => 'Conditional Comments',
        'heading_body' => '<p>You will come across a situation where you will need to apply a different style sheet based on different versions of Internet Explorer, in such situation conditional comments will be helpful.</p>',
        'heading' => 'Using Comment Tag',
                'heading_body' => '<p>There are few browsers that support &lt;comment&gt; tag to comment a part of HTML code.</p>
                <blockquote><p><b>Note</b> &minus; The &lt;comment&gt; tag deprecated in HTML5. Do not use this element.</p></blockquote>
                <p>If you are using IE, then it will produce following result &minus;</p>
                <iframe onLoad="resizeFrame(this)" class="result" src="/html/src/using_comment_tag.htm" height="100px" width="600px"></iframe>
                <p>But if you are not using IE, then it will produce following result &minus;</p>',
        'html_code' => ' <!DOCTYPE html>
                <html>

                <head>
                    <title>Using Comment Tag</title>
                </head>
    
                <body>
                    <p>This is <comment>not</comment> Internet Explorer.</p>
                </body>
    
                </html>',
                 'css_code' => '',
                'javascript_code' =>  '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html9->id,
        'heading' => 'Commenting Script Code',
                'heading_body' => '<p>Though you will learn JavaScript with HTML, in a separate tutorial, but here you must make a note that if you are using Java Script or VB Script in your HTML code then it is recommended to put that script code inside proper HTML comments so that old browsers can work properly.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Commenting Script Code</title>
      
                    <script>
                        <!-- 
                            document.write("Hello World!")
                        //-->
                    </script>
                </head>
    
                <body>
                    <p>Hello , World!</p>
                </body>
    
                </html>',
                'css_code' => '',
                'javascript_code' =>  '',
                ]);
Code::create([
            'course_id' => 1,
                'lesson_id' => $html9->id,
        'heading' => 'Commenting Style Sheets',
                'heading_body' => '<p>Though you will learn using style sheets with HTML in a separate tutorial, but here you must make a note that if you are using Cascading Style Sheet (CSS) in your HTML code then it is recommended to put that style sheet code inside proper HTML comments so that old browsers can work properly.</p>',
        'html_code' => '<!DOCTYPE html>
                <html>

                <head>
                    <title>Commenting Style Sheets</title>
      
                    <style>
                        <!--
                            .example {
                            border:1px solid #4a7d49;
                            }
                        //-->
                    </style>
                </head>
    
                <body>
                    <div class = "example">Hello , World!</div>
                </body>
    
                </html>',
                'css_code' => ' ',
                'javascript_code' => ''

            ]
        );


    }
}
