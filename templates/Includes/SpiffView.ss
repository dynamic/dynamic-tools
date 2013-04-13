<h4>
	<a href="$PageLink.Link" class="SpiffHeadline">
    	<% if Headline %>
    		$Headline
    	<% else_if Name %>
    		$Name
    	<% end_if %>
    </a>
</h4>
<% if Image %>
    <a href="$PageLink.Link" class="home-glow">
		<% control Image %>
			<img class="lazy" original-src="$CroppedImage(290,199).URL" src="dynamic-tools/images/lazy/grey.gif" width="$CroppedImage(290,199).Width" height="$CroppedImage(290,199).Height">
		<% end_control %>
    </a>
<% end_if %>
<% if Description %><p class="descrip">$Description</p><% end_if %>
<% if $PageLink %><p><a href="$PageLink.Link" class="learnMore">Learn more.</a></p><% end_if %>
