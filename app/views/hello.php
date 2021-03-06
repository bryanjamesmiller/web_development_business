
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset='utf-8'/>
	<meta http-equiv="X-UA-Compatible" content="chrome=1"/>
	<meta name="description" content="Web Dev"/>


	<link rel="stylesheet" type="text/css" media="screen" href="/css/stylesheet.css">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="screen" href="/css/scrollYou.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap-select.min.css">
	<style type="text/css">
		.com {
			color: #93a1a1;
		}

		.lit {
			color: #195f91;
		}

		.pun, .opn, .clo {
			color: #93a1a1;
		}

		.fun {
			color: #dc322f;
		}

		.str, .atv {
			color: #D14;
		}

		.kwd, .prettyprint .tag {
			color: #1e347b;
		}

		.typ, .atn, .dec, .var {
			color: teal;
		}

		.pln {
			color: #48484c;
		}

		.prettyprint {
			padding: 8px;
			background-color: #f7f7f9;
			border: 1px solid #e1e1e8;
		}

		.prettyprint.linenums {
			-webkit-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
			-moz-box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
			box-shadow: inset 40px 0 0 #fbfbfc, inset 41px 0 0 #ececf0;
		}

		/* Specify class=linenums on a pre to get line numbering */
		ol.linenums {
			margin: 0 0 0 33px; /* IE indents via margin-left */
		}

		ol.linenums li {
			padding-left: 12px;
			color: #bebec5;
			line-height: 20px;
			text-shadow: 0 1px 0 #fff;
		}

		.special {
			font-style: italic;
			font-weight: bold !important;
			color: #bc0000 !important;
			background: #000;
		}
	</style>

	<script async type="text/javascript"
			src="//cdn.carbonads.com/carbon.js?zoneid=1673&serve=C6AILKT&placement=silviomoretogithubiobootstrapsel"
			id="_carbonads_js"></script>

	<title>Bootstrap-select</title>
</head>

<body>

<!-- HEADER -->
<div id="header_wrap" class="outer">
	<header class="inner">
		<a id="forkme_banner" href="https://github.com/silviomoreto/bootstrap-select">View on GitHub</a>

		<h1 id="project_title">Bootstrap-select</h1>

		<h2 id="project_tagline">A custom select for @twitter bootstrap using button dropdown.</h2>

		<div id="carbonads-container">
			<div class="carbonad">
				<div id="azcarbon"></div>
				<script type="text/javascript">
					var z = document.createElement("script");
					z.type = "text/javascript";
					z.async = true;
					z.src = "http://engine.carbonads.com/z/51052/azcarbon_2_1_0_HORIZDARK";
					var s = document.getElementsByTagName("script")[0];
					s.parentNode.insertBefore(z, s);
				</script>
			</div>
		</div>

		<section id="downloads">
			<a class="zip_download_link" href="https://github.com/silviomoreto/bootstrap-select/zipball/v1.6.3">Download
				this project as a .zip file</a>
			<a class="tar_download_link" href="https://github.com/silviomoreto/bootstrap-select/tarball/v1.6.3">Download
				this project as a tar.gz file</a>
		</section>
	</header>
</div>

<!-- MAIN CONTENT -->
<div id="main_content_wrap" class="outer">
	<section id="main_content" class="inner">
		<h1>bootstrap-select</h1>

		<p>A custom select for <a href="https://github.com/twitter" class="user-mention">@twitter</a> Bootstrap using button
			dropdown.</p>

		<section id="content_usage">
			<h2 id="usage">Usage</h2>

			<p>Create your <code>&lt;select&gt;</code> with the <code>.selectpicker</code> class.</p>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select&gt;
</pre>

			<p>Enable Bootstrap-Select via JavaScript:</p>

<pre class="prettyprint linenums">
  $('.selectpicker').selectpicker();
</pre>

			<p>Options can be passed via data attributes or JavaScript.</p>

<pre class="prettyprint linenums">
  $('.selectpicker').selectpicker({
      style: 'btn-info',
      size: 4
  });
</pre>
		</section>

		<section id="content_example">
			<h2 id="example">Example</h2>

			<div class="bs-docs-example">
				<p>Make this:</p>

				<select>
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>

				<p>Become this:</p>

				<select class="selectpicker">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select>
</pre>

			<p id="optgroup">It also works with option groups:</p>

			<div class="bs-docs-example">
				<select class="selectpicker">
					<optgroup label="Picnic">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</optgroup>
					<optgroup label="Camping">
						<option>Tent</option>
						<option>Flashlight</option>
						<option>Toilet Paper</option>
					</optgroup>
				</select>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    &lt;optgroup label="Picnic"&gt;
      &lt;option&gt;Mustard&lt;/option&gt;
      &lt;option&gt;Ketchup&lt;/option&gt;
      &lt;option&gt;Relish&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Camping"&gt;
      &lt;option&gt;Tent&lt;/option&gt;
      &lt;option&gt;Flashlight&lt;/option&gt;
      &lt;option&gt;Toilet Paper&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select>
</pre>

			<p id="multiselect">And with multiple selects:</p>

			<div class="bs-docs-example">
				<select class="selectpicker" multiple>
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker" multiple&gt;
      &lt;option&gt;Mustard&lt;/option&gt;
      &lt;option&gt;Ketchup&lt;/option&gt;
      &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select>
</pre>

			(Note that you should give your selectpicker a <code>name</code> that ends with array syntax (example: <code>&lt;select name="named[]" class="selectpicker" multiple&gt;</code>) such
			that all items can be processed with php,... This is the same for <code>&lt;select&gt;</code>s without <code>bootstrap-select</code>.)

			<p id="data-max-option">You can limit the number of elements you are allowed to select via the
				<code>data-max-option</code> attribute. It also works for option groups. </p>

			<div class="bs-docs-example">
				<select class="selectpicker" multiple data-max-options="2">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>

				<select class="selectpicker" multiple>
					<optgroup label="Condiments" data-max-options="2">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</optgroup>
					<optgroup label="Breads" data-max-options="2">
						<option>Plain</option>
						<option>Steamed</option>
						<option>Toasted</option>
					</optgroup>
				</select>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker" multiple data-max-options="2"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select&gt;

  &lt;select class="selectpicker" multiple  data-max-options="2"&gt;
    &lt;optgroup label="Condiments" data-max-options="2"&gt;
      &lt;option&gt;Mustard&lt;/option&gt;
      &lt;option&gt;Ketchup&lt;/option&gt;
      &lt;option&gt;Relish&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Breads" data-max-options="2"&gt;
      &lt;option&gt;Plain&lt;/option&gt;
      &lt;option&gt;Steamed&lt;/option&gt;
      &lt;option&gt;Toasted&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select&gt;
</pre>

			<p id="data-style">You can set different Bootstrap classes via the <code>data-style</code> attribute:</p>

			<div class="bs-docs-example">
				<select class="selectpicker" data-style="btn-primary">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>

				<select class="selectpicker" data-style="btn-info">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>

				<select class="selectpicker" data-style="btn-success">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>

				<select class="selectpicker" data-style="btn-warning">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>

				<select class="selectpicker" data-style="btn-danger">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>

				<select class="selectpicker" data-style="btn-inverse">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker" data-style="btn-primary"&gt;
    ...
  &lt;/select>

  &lt;select class="selectpicker" data-style="btn-info"&gt;
    ...
  &lt;/select>

  &lt;select class="selectpicker" data-style="btn-success"&gt;
    ...
  &lt;/select>

  &lt;select class="selectpicker" data-style="btn-warning"&gt;
    ...
  &lt;/select>

  &lt;select class="selectpicker" data-style="btn-danger"&gt;
    ...
  &lt;/select>

  &lt;select class="selectpicker" data-style="btn-inverse"&gt;
    ...
  &lt;/select>
</pre>

			<p id="data-live-search">You can add a search input by passing <code>data-live-search="true"</code> attribute:</p>

			<div class="bs-docs-example">
				<select class="selectpicker" data-live-search="true">
					<option>Hot Dog, Fries and a Soda</option>
					<option>Burger, Shake and a Smile</option>
					<option>Sugar, Spice and all things nice</option>
				</select>
			</div>

			<p id="title">You can also use the <code>title</code> attribute as an alternative to display when the option is
				selected:</p>

			<div class="bs-docs-example">
				<select class="selectpicker">
					<option title="Combo 1">Hot Dog, Fries and a Soda</option>
					<option title="Combo 2">Burger, Shake and a Smile</option>
					<option title="Combo 3">Sugar, Spice and all things nice</option>
				</select>
			</div>

			<p id="titleMultiples">Using the <code>title</code> attribute on a <code>multiple select</code> will show the default
				prompt text when nothing is selected (note: this will not work on single <code>select</code> elements as they must
				have a selected value):</p>

			<div class="bs-docs-example">
				<select class="selectpicker" multiple title="Choose one of the following...">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker" multiple title='Choose one of the following...'&gt;
     &lt;option&gt;Mustard&lt;/option&gt;
      &lt;option&gt;Ketchup&lt;/option&gt;
      &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select>
</pre>

			<p id="titleMultiplesFormat">Using the <code>data-selected-text-format</code> attribute on a <code>multiple
					select</code>
				you can specify how the selection is displayed.</p>

			<p>The supported values are:</p>
			<ul>
				<li><code>values</code> A comma delimted list of selected values. (default)</li>
				<li><code>count</code> If one item is selected, then the value is shown, if more than one is selected then the
					number of selected items is displayed, eg <span class="label">2 of 6 selected</span></li>
				<li><code>count > x</code> Where X is the number of items selected when the display format changes from
					<code>values</code> to <code>count</code></li>
			</ul>
			<div class="bs-docs-example">
				<select class="selectpicker" multiple data-selected-text-format="count">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker" multiple data-selected-text-format="count"&gt;
     &lt;option&gt;Mustard&lt;/option&gt;
      &lt;option&gt;Ketchup&lt;/option&gt;
      &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select>
</pre>

			<div class="bs-docs-example">
				<select class="selectpicker" multiple data-selected-text-format="count > 3">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
					<option>Onions</option>
				</select>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker" multiple data-selected-text-format="count&gt3"&gt;
     &lt;option&gt;Mustard&lt;/option&gt;
      &lt;option&gt;Ketchup&lt;/option&gt;
      &lt;option&gt;Relish&lt;/option&gt;
      &lt;option&gt;Onions&lt;/option&gt;
  &lt;/select>
</pre>

			<p id="show-tick">You can also show the tick icon on single <code>select</code> with the <code>show-tick</code>
				class:</p>

			<div class="bs-docs-example">
				<select class="selectpicker show-tick">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>



<pre class="prettyprint linenums">
  &lt;select class="selectpicker show-tick"&gt;
     &lt;option&gt;Mustard&lt;/option&gt;
      &lt;option&gt;Ketchup&lt;/option&gt;
      &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select>
</pre>

			<p id="show-menu-arrow">The bootstrap menu arrow can be added with the <code>show-menu-arrow</code> class:</p>

			<div class="bs-docs-example">
				<select class="selectpicker show-menu-arrow">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>



<pre class="prettyprint linenums">
  &lt;select class="selectpicker show-menu-arrow"&gt;
     &lt;option&gt;Mustard&lt;/option&gt;
      &lt;option&gt;Ketchup&lt;/option&gt;
      &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select>
</pre>


			<p id="classes">Classes added to the options are transferred to the select:</p>

			<div class="bs-docs-example">
				<select class="selectpicker">
					<option>Mustard</option>
					<option class="special">Ketchup</option>
					<option>Relish</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option class="special"&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select>
</pre>
<pre class="prettyprint linenums">
  .special {
    font-style: italic;
    font-weight: bold !important;
    color:#bc0000 !important;
    background:#000;
  }
</pre>

			<p id="span">Apply <code>.span*</code> class to the selects to set the width.</p>

			<div class="bs-docs-example">
				<div class="row-fluid">
					<select class="selectpicker span3">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<select class="selectpicker span8">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
				<div class="row-fluid">
					<select class="selectpicker span4">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<select class="selectpicker span7">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
				<div class="row-fluid">
					<select class="selectpicker span5">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
					<select class="selectpicker span6">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</select>
				</div>
			</div>

<pre class="prettyprint linenums">
  &lt;div class="row-fluid"&gt;
    &lt;select class="selectpicker span2"&gt;
      ...
    &lt;/select&gt;
  &lt;/div&gt;
</pre>

			<p id="data-width">Alternatively, use the <code>data-width</code> attribute to set the width of the select. Set <code>data-width</code>
				to <code>'auto'</code> to automatically adjust the width of the select to its widest option. An exact value can also
				be specified, e.g., <code>300px</code> or <code>50%</code>.</p>

			<div class="bs-docs-example">
				<div class="row-fluid">
					<select class="selectpicker" data-width="auto">
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
						<option>All of the above (and much, much more!)</option>
					</select>

					<div class="row-fluid">
						<select class="selectpicker" data-width="100px">
							<option>Mustard</option>
							<option>Ketchup</option>
							<option>Relish</option>
							<option>All of the above (and much, much more!)</option>
						</select>
					</div>
					<div class="row-fluid">
						<select class="selectpicker" data-width="75%">
							<option>Mustard</option>
							<option>Ketchup</option>
							<option>Relish</option>
							<option>All of the above (and much, much more!)</option>
						</select>
					</div>
				</div>
			</div>

<pre class="prettyprint linenums">
  &lt;div class="row-fluid"&gt;
    &lt;select class="selectpicker" data-width="auto"&gt;
      ...
    &lt;/select&gt;
    &lt;select class="selectpicker" data-width="100px"&gt;
      ...
    &lt;/select&gt;
    &lt;select class="selectpicker" data-width="75%"&gt;
      ...
    &lt;/select&gt;
  &lt;/div&gt;
</pre>

			<p id="disabled-select">Add the <code>disabled</code> attribute to the select to apply the <code>disabled</code> class.
			</p>

			<div class="bs-docs-example">
				<select class="selectpicker" disabled>
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker" disabled&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select>
</pre>

			<p id="disabled-option">Adding <code>disabled="disabled"</code> to an option transfers to the menu.</p>

			<div class="bs-docs-example">
				<select class="selectpicker">
					<option>Mustard</option>
					<option disabled>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker" disabled&gt;
    &lt;option&gt;Mustard&lt;/option&gt;
    &lt;option disabled="disabled"&gt;Ketchup&lt;/option&gt;
    &lt;option&gt;Relish&lt;/option&gt;
  &lt;/select>
</pre>

			<p id="disabled-option-group">Adding <code>disabled="disabled"</code> to an option group cascades to the children.</p>

			<div class="bs-docs-example">
				<select class="selectpicker test">
					<optgroup label="Picnic" disabled>
						<option>Mustard</option>
						<option>Ketchup</option>
						<option>Relish</option>
					</optgroup>
					<optgroup label="Camping">
						<option>Tent</option>
						<option>Flashlight</option>
						<option>Toilet Paper</option>
					</optgroup>
				</select>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    &lt;optgroup label="Picnic" disabled&gt;
      &lt;option&gt;Mustard&lt;/option&gt;
      &lt;option&gt;Ketchup&lt;/option&gt;
      &lt;option&gt;Relish&lt;/option&gt;
    &lt;/optgroup&gt;
    &lt;optgroup label="Camping"&gt;
      &lt;option&gt;Tent&lt;/option&gt;
      &lt;option&gt;Flashlight&lt;/option&gt;
      &lt;option&gt;Toilet Paper&lt;/option&gt;
    &lt;/optgroup&gt;
  &lt;/select>
</pre>


			<p id="size">The <code>size</code> option is set to <code>'auto'</code> by default. When <code>size</code> is set to
				<code>'auto'</code>, the menu always opens up to show as many items as the window will allow without being cut off.
				Set <code>size</code> to <code>false</code> to always show all items. The size of the menu can also be specifed
				using the <code>data-size</code> attribute.</p>

			<div class="bs-docs-example">
				<select class="selectpicker">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
					<option>Mayonnaise</option>
					<option>Barbecue Sauce</option>
					<option>Salad Dressing</option>
					<option>Tabasco</option>
					<option>Salsa</option>
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
					<option>Mayonnaise</option>
					<option>Barbecue Sauce</option>
					<option>Salad Dressing</option>
					<option>Tabasco</option>
					<option>Salsa</option>
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
					<option>Mayonnaise</option>
					<option>Barbecue Sauce</option>
					<option>Salad Dressing</option>
					<option>Tabasco</option>
					<option>Salsa</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    ...
  &lt;/select>
<br>
Note: this is the same as:<br>
  &lt;select class="selectpicker" data-size="auto"&gt;
    ...
  &lt;/select>
</pre>

			<p id="data-size">Specify a number for <code>data-size</code> to choose the maximum number of items to show in the menu.
			</p>

			<div class="bs-docs-example">
				<select class="selectpicker" data-size="5">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
					<option>Mayonnaise</option>
					<option>Barbecue Sauce</option>
					<option>Salad Dressing</option>
					<option>Tabasco</option>
					<option>Salsa</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker" data-size="5"&gt;
    ...
  &lt;/select>
</pre>

			<p id="scrollYou">You can use the plugin <a href="https://github.com/silviomoreto/scrollYou"
														target="_blank">scrollYou</a> cross-browser native scroll. The example below
				behaves like mountain lion.</p>

			<div class="bs-docs-example">
				<select class="selectpicker scrollMe" data-size="5">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
					<option>Mayonnaise</option>
					<option>Barbecue Sauce</option>
					<option>Salad Dressing</option>
					<option>Tabasco</option>
					<option>Salsa</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker" data-size="5"&gt;
    ...
  &lt;/select>
</pre>

			<p id="data-divider">Add <code>data-divider="true"</code> to an option to turn it into a divider.</p>

			<div class="bs-docs-example">
				<select class="selectpicker">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
					<option>Mayonnaise</option>
					<option data-divider="true"></option>
					<option>Barbecue Sauce</option>
					<option>Salad Dressing</option>
					<option>Tabasco</option>
					<option>Salsa</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    ...
    &lt;option data-divider="true"&gt;&lt;/option>
    ...
  &lt;/select>
</pre>

			<p id="data-subtext">Add subtext to an option or optgroup with the <code>data-subtext</code> attribute:</p>

			<div class="bs-docs-example">
				<div class="row-fluid">
					<select class="selectpicker">
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz">Ketchup</option>
						<option data-subtext="Sweet">Relish</option>
						<option data-subtext="Miracle Whip">Mayonnaise</option>
						<option data-divider="true"></option>
						<option data-subtext="Honey">Barbecue Sauce</option>
						<option data-subtext="Ranch">Salad Dressing</option>
						<option data-subtext="Sweet & Spicy">Tabasco</option>
						<option data-subtext="Chunky">Salsa</option>
					</select>
				</div>

				<div class="row-fluid">
					<select class="selectpicker" data-show-subtext="true">
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz">Ketchup</option>
						<option data-subtext="Sweet">Relish</option>
						<option data-subtext="Miracle Whip">Mayonnaise</option>
						<option data-divider="true"></option>
						<option data-subtext="Honey">Barbecue Sauce</option>
						<option data-subtext="Ranch">Salad Dressing</option>
						<option data-subtext="Sweet & Spicy">Tabasco</option>
						<option data-subtext="Chunky">Salsa</option>
					</select>
					<span class="help-inline">With <code>showSubtext</code> set to true.</span>
				</div>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    ...
    &lt;option data-subtext="Heinz"&gt;Ketchup&lt;/option>
    ...
  &lt;/select>
</pre>

			<p id="data-icon">Add an icon to an option or optgroup with the <code>data-icon</code> attribute:</p>

			<div class="bs-docs-example">
				<select class="selectpicker">
					<option data-icon="glyphicon-glass">Mustard</option>
					<option data-icon="glyphicon-heart">Ketchup</option>
					<option data-icon="glyphicon-film">Relish</option>
					<option data-icon="glyphicon-home">Mayonnaise</option>
					<option data-icon="glyphicon-print">Barbecue Sauce</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    ...
    &lt;option data-icon="glyphicon-heart"&gt;Ketchup&lt;/option>
    ...
  &lt;/select>
</pre>

			<p id="data-content">Insert custom HTML into the option with the <code>data-content</code> attribute:</p>

			<div class="bs-docs-example">
				<select class="selectpicker">
					<option data-content="<span class='label label-warning'>Mustard</span>">Mustard</option>
					<option data-content="<span class='label label-danger label-important'>Ketchup</span>">Ketchup</option>
					<option data-content="<span class='label label-success'>Relish</span>">Relish</option>
					<option data-content="<span class='label label-info'>Mayonnaise</span>">Mayonnaise</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker"&gt;
    ...
    &lt;option data-content="&lt;span class='label label-success'&gt;Relish&lt;/span&gt;"&gt;Relish&lt;/option>
    ...
  &lt;/select>
</pre>

			<p id="header">Add a header to the dropdown menu, e.g. <code>header: 'Select a condiment'</code> or <code>data-header="Select
					a condiment"</code></p>

			<div class="bs-docs-example">
				<div class="row-fluid">
					<select class="selectpicker" data-header="Select a condiment">
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz">Ketchup</option>
						<option data-subtext="Sweet">Relish</option>
						<option data-subtext="Miracle Whip">Mayonnaise</option>
						<option data-divider="true"></option>
						<option data-subtext="Honey">Barbecue Sauce</option>
						<option data-subtext="Ranch">Salad Dressing</option>
						<option data-subtext="Sweet & Spicy">Tabasco</option>
						<option data-subtext="Chunky">Salsa</option>
					</select>
				</div>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker" data-header="Select a condiment"&gt;
    ...
  &lt;/select>
</pre>

			<p id="container">Append the select to a specific element, e.g. <code>container: 'body'</code> or <code>data-container=".main-content"</code>
			</p>

			<div class="bs-docs-example" style="overflow:hidden;">
				<div class="row-fluid">
					<select class="selectpicker">
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz">Ketchup</option>
						<option data-subtext="Sweet">Relish</option>
						<option data-subtext="Miracle Whip">Mayonnaise</option>
						<option data-divider="true"></option>
						<option data-subtext="Honey">Barbecue Sauce</option>
						<option data-subtext="Ranch">Salad Dressing</option>
						<option data-subtext="Sweet & Spicy">Tabasco</option>
						<option data-subtext="Chunky">Salsa</option>
					</select>
					<select class="selectpicker" data-container="body">
						<option data-subtext="French's">Mustard</option>
						<option data-subtext="Heinz">Ketchup</option>
						<option data-subtext="Sweet">Relish</option>
						<option data-subtext="Miracle Whip">Mayonnaise</option>
						<option data-divider="true"></option>
						<option data-subtext="Honey">Barbecue Sauce</option>
						<option data-subtext="Ranch">Salad Dressing</option>
						<option data-subtext="Sweet & Spicy">Tabasco</option>
						<option data-subtext="Chunky">Salsa</option>
					</select>
				</div>
			</div>

<pre class="prettyprint linenums">
&lt;div style="overflow:hidden;"&gt;
  &lt;select class="selectpicker"&gt;
    ...
  &lt;/select>

  &lt;select class="selectpicker" data-container="body"&gt;
    ...
  &lt;/select>
&lt;div&gt;
</pre>

			<p id="dropup"><code>dropupAuto</code> is set to true by default, which automatically determines whether or not the
				select should be a dropup. If <code>dropupAuto</code> is set to false, manually make the select a dropup menu by
				adding the <code>.dropup</code> class to the select.</p>

			<div class="bs-docs-example">
				<select class="selectpicker dropup">
					<option>Mustard</option>
					<option>Ketchup</option>
					<option>Relish</option>
				</select>
			</div>

<pre class="prettyprint linenums">
  &lt;select class="selectpicker dropup"&gt;
    ...
  &lt;/select>
</pre>
		</section>

		<section id="content_options">
			<h2 id="options">Options</h2>

			<p>Options can be passed via data attributes or JavaScript. For data attributes, append the option name to
				<code>data-</code>, as in <code>data-style=""</code>.</p>
			<table class="table table-bordered table-striped">
				<thead>
				<tr>
					<th style="width: 100px;">Name</th>
					<th style="width: 100px;">type</th>
					<th style="width: 50px;">default</th>
					<th>description</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>container</td>
					<td>string | false</td>
					<td>false</td>
					<td>appends the select to a specific element or selector, e.g., <code>container: 'body' | '.main-body'</code>
					</td>
				</tr>
				<tr>
					<td>countSelectedText</td>
					<td>string</td>
					<td>'{0} of {1} selected'</td>
					<td>sets the format for the text displayed when selectedTextFormat is <code>count</code> or <code>count >
							#</code>. {0} is the selected amount. {1} is total available for selection.
					</td>
				</tr>
				<tr>
					<td>dropupAuto</td>
					<td>boolean</td>
					<td>true</td>
					<td>checks to see which has more room, above or below. If the dropup has enough room to fully open normally, but
						there is more room above, the dropup still opens normally. Otherwise, it becomes a dropup. If dropupAuto is
						set to false, dropups must be called manually.
					</td>
				</tr>
				<tr>
					<td>header</td>
					<td>string</td>
					<td>false</td>
					<td>adds a header to the top of the menu; includes a close button by default</td>
				</tr>
				<tr>
					<td>hideDisabled</td>
					<td>boolean</td>
					<td>false</td>
					<td>removes disabled options and optgroups from the menu <code>data-hide-disabled: true</code></td>
				</tr>
				<tr>
					<td>mobile</td>
					<td>boolean</td>
					<td>false</td>
					<td>enables the device's native menu for select menus</td>
				</tr>
				<tr>
					<td>selectedTextFormat</td>
					<td>'values' | 'count' | 'count > #' (where # is an integer)</td>
					<td>null</td>
					<td>specifies how the selection is displayed with a multiple select (see <a
							href="http://silviomoreto.github.io/bootstrap-select/#titleMultiplesFormat">here</a></td>
				</tr>
				<tr>
					<td>size</td>
					<td>'auto' | integer | false</td>
					<td>'auto'</td>
					<td><p>when set to <code>'auto'</code>, the menu always opens up to show as many items as the window will allow
							without being cut off</p>

						<p>set to <code>false</code> to always show all items</p></td>
				</tr>
				<tr>
					<td>showSubtext</td>
					<td>boolean</td>
					<td>false</td>
					<td>subtext associated with a selected option will be displayed in the button <code>data-show-subtext:
							true</code></td>
				</tr>
				<tr>
					<td>showIcon</td>
					<td>boolean</td>
					<td>true</td>
					<td>Display icon(s) associated with selected option(s) in the button. If false, icons will not be displayed in
						the button.
					</td>
				</tr>
				<tr>
					<td>showContent</td>
					<td>boolean</td>
					<td>true</td>
					<td>Display custom HTML associated with selected option(s) in the button. If false, the option value will be
						displayed instead.
					</td>
				</tr>
				<tr>
					<td>style</td>
					<td>string | null</td>
					<td>null</td>
					<td><p>apply a class to the button, see <a target="_blank"
															   href="http://twitter.github.io/bootstrap/base-css.html#buttons">bootstrap
								buttons styles</a></p></td>
				</tr>
				<tr>
					<td>title</td>
					<td>string | null</td>
					<td>null</td>
					<td><p>Set the default text for bootstrap-select</p></td>
				</tr>
				<tr>
					<td>width</td>
					<td>'auto' | '#px' | '#%' | null (where # is an integer)</td>
					<td>null</td>
					<td>
						<p><code>auto</code> automatically adjusts the width of the select to accommodate its widest option</p>

						<p>set the width of the select manually, e.g. <code>300px</code> or <code>50%</code></p>
					</td>
				</tr>
				<tr>
					<td>maxOptions</td>
					<td>integer | false (where # is an integer)</td>
					<td>false</td>
					<td>
						<p>When set and in a multi</p>
					</td>
				</tr>
				</tbody>
			</table>

			<h2 id="methods">Methods</h2>

			<h3>val()</h3>

			<p>You can set the selected value by calling the <code>val</code> method on the element.</p>

<pre class="prettyprint linenums">
  $('.selectpicker').selectpicker('val', 'Mustard');
  $('.selectpicker').selectpicker('val', ['Mustard','Relish']);
</pre>

			<p>This is different to calling <code>val()</code> directly on the <code>select</code> element. If you call
				<code>val()</code> on the element directly
				the bootstrap-select ui will not refresh (as the change event only fires from user interaction). If you use <code>val()</code>
				directly, you will need to manually re-render the ui</p>

<pre class="prettyprint linenums">
  $('.selectpicker').val('Mustard');
  $('.selectpicker').selectpicker('render');

  //this is the equivalent of the above
  $('.selectpicker').selectpicker('val', 'Mustard');
</pre>

			<h3 id="selectAll">selectAll()</h3>

			<p>This will select all items in a <code>multiple</code> select.</p>

<pre class="prettyprint linenums">
   $('.selectpicker').selectpicker('selectAll');
</pre>

			<h3 id="selectAll">deselectAll()</h3>

			<p>This will deselect all items in a <code>multiple</code> select.</p>

<pre class="prettyprint linenums">
   $('.selectpicker').selectpicker('deselectAll');
</pre>


			<h3 id="render">render()</h3>

			<p>You can force a re-render of the bootstrap-select ui with the <code>render</code> method. This is useful if you
				programatically change any underlying values that affect the layout of the element.</p>

<pre class="prettyprint linenums">
   $('.selectpicker').selectpicker('render');
</pre>

			<h3 id="mobile">mobile()</h3>

			<p>Enable mobile scrolling by calling <code>$('.selectpicker').selectpicker('mobile')</code>. The method for detecting
				the browser is left up to the user. This enables the device's native menu for select menus.</p>

<pre class="prettyprint linenums">
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
    $('.selectpicker').selectpicker('mobile');
}
</pre>

			<h3 id="selectAll">setStyle()</h3>

			<p>Modify the class(es) associated with either the button itself or its container.</p>

			<p>If changing the class on the container:</p>

<pre class="prettyprint linenums">
   $('.selectpicker').addClass('span12').selectpicker('setStyle');
</pre>

			<p>If changing the class(es) on the button (altering data-style):</p>

<pre class="prettyprint linenums">
// Replace Class
  $('.selectpicker').selectpicker('setStyle', 'btn-danger');

// Add Class
  $('.selectpicker').selectpicker('setStyle', 'btn-large', 'add');

// Remove Class
  $('.selectpicker').selectpicker('setStyle', 'btn-large', 'remove');
</pre>

			<h3 id="refresh">refresh()</h3>

			<p>To programmatically update a select with JavaScript, first manipulate the select, then use the <code>refresh</code>
				method to update the UI to match the new state. This is necessary when removing or adding options, or when
				disabling/enabling a select via JavaScript.</p>

<pre class="prettyprint linenums">
   $('.selectpicker').selectpicker('refresh');
</pre>

			<div class="bs-docs-example">
				<select class="selectpicker remove-example">
					<option value="Mustard">Mustard</option>
					<option value="Ketchup">Ketchup</option>
					<option value="Relish">Relish</option>
				</select>
				<br/>
				<button class="btn btn-warning rm-mustard">Remove Mustard</button>
				<button class="btn btn-danger rm-ketchup">Remove Ketchup</button>
				<button class="btn btn-success rm-relish">Remove Relish</button>
			</div>
<pre class="prettyprint linenums">
  &lt;select class="selectpicker remove-example"&gt;
    &lt;option value="Mustard"&gt;Mustard&lt;/option&gt;
    &lt;option value="Ketchup"&gt;Ketchup&lt;/option&gt;
    &lt;option value="Relish"&gt;Relish&lt;/option&gt;
  &lt;/select&gt;

&lt;button class="btn btn-warning rm-mustard"&gt;Remove Mustard&lt;/button&gt;
&lt;button class="btn btn-danger rm-ketchup"&gt;Remove Ketchup&lt;/button&gt;
&lt;button class="btn btn-success rm-relish"&gt;Remove Relish&lt;/button&gt;

  $('.rm-mustard').click(function() {
    $('.remove-example').find('[value=Mustard]').remove();
    $('.remove-example').selectpicker('refresh');
  });
</pre>

			<div class="bs-docs-example">
				<select class="selectpicker disable-example">
					<option value="Mustard">Mustard</option>
					<option value="Ketchup">Ketchup</option>
					<option value="Relish">Relish</option>
				</select>
				<br/>
				<button class="btn ex-disable"><i class="glyphicon glyphicon-remove"></i> Disable</button>
				<button class="btn ex-enable"><i class="glyphicon glyphicon-ok"></i> Enable</button>
			</div>
<pre class="prettyprint linenums">
      $('.ex-disable').click(function() {
          $('.disable-example').prop('disabled',true);
          $('.disable-example').selectpicker('refresh');
      });
      $('.ex-enable').click(function() {
          $('.disable-example').prop('disabled',false);
          $('.disable-example').selectpicker('refresh');
      });
</pre>

			<h3 id="hide">hide()</h3>

			<p>To programmatically hide the bootstrap-select use the <code>hide</code> method to hide it.</p>

<pre class="prettyprint linenums">
   $('.selectpicker').selectpicker('hide');
</pre>

			<h3 id="show">show()</h3>

			<p>To programmatically show the bootstrap-select use the <code>show</code> method to show it.</p>

<pre class="prettyprint linenums">
   $('.selectpicker').selectpicker('show');
</pre>

			<h3 id="show">destroy()</h3>

			<p>To programmatically destroy (remove) the bootstrap-select use the <code>destroy</code> method to destroy it.</p>

<pre class="prettyprint linenums">
   $('.selectpicker').selectpicker('destroy');
</pre>
		</section>
	</section>
</div>

<!-- FOOTER  -->
<div id="footer_wrap" class="outer">
	<footer class="inner">
		<p class="copyright">Bootstrap-select maintained by <a href="https://github.com/caseyjhol">caseyjhol</a></p>

		<p>Published with <a href="http://pages.github.com">GitHub Pages</a></p>
	</footer>
</div>

<script src="/js/jquery.min.js"></script>
<script src="/js/prettify.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/bootstrap-select.min.js"></script>
<script src="/js/jquery.mousewheel.js"></script>
<script src="/js/scrollYou.js"></script>
<script type="text/javascript">
	window.onload = function () {
		$('.rm-mustard').click(function () {
			var $re = $('.remove-example');
			$re.find('[value=Mustard]').remove();
			$re.selectpicker('refresh');
		});
		$('.rm-ketchup').click(function () {
			var $re = $('.remove-example');
			$re.find('[value=Ketchup]').remove();
			$re.selectpicker('refresh');
		});
		$('.rm-relish').click(function () {
			var $re = $('.remove-example');
			$re.find('[value=Relish]').remove();
			$re.selectpicker('refresh');
		});
		$('.ex-disable').click(function () {
			var $de = $('.disable-example');
			$de.prop('disabled', true);
			$de.selectpicker('refresh');
		});
		$('.ex-enable').click(function () {
			var $de = $('.disable-example');
			$de.prop('disabled', false);
			$de.selectpicker('refresh');
		});

		// scrollYou
		$('.scrollMe .dropdown-menu').scrollyou();

		prettyPrint();
	};
</script>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-35848102-1']);
	_gaq.push(['_trackPageview']);

	(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
</script>
</body>
</html>
