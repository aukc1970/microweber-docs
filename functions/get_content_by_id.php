
<h2>get_content_by_id</h2>
<p>get_content_by_id — returns array of content data or false</p>
<h3>Summary</h3>
<pre class="prettyprint"><code class="language-php">get_content_by_id($id);
</code></pre>


  
<h3>Return Values</h3> 
 <p>
Array wirh the post data or "false" if the content is not found</p>


<h3>Parameters</h3>
  <p>It takes content id as parameter and returns the database records</p>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>parameter</th>
			<th>description</th>
			<th>value</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>id</td>
			<td>the id of the content</td>
			<td>valid content id</td>
		</tr>
		 
	</tbody>
</table>
 
<h3>Example</h3>
<pre class="prettyprint"><code class="language-php">//get a content item by id
$content = get_content_by_id(3); 

if($content != false){
	print $content['title'];  
	print $content['id'];
	print $content['parent'];
	print $content['position'];
	print $content['title']; 
	// and more... print_r($content);
}
</code></pre>


<h4>See also</h4>
<?php print page_content('functions/_nav/content'); ?>