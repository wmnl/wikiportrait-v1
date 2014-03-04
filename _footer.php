			<div id="footer">
				<p>
					The upload-wizard is programmed by <a href="http://nl.wikipedia.org/wiki/Gebruiker:Husky">Husky</a> and
					released under the terms of the <a href="http://www.gnu.org/copyleft/gpl.html">GNU General Public License</a>.
					Concept by the members <a href="http://nl.wikimedia.org/wiki/Werkgroep_vrije_media">Werkgroep Vrije Media</a>
					(Workgroup Free Media) of the <a href="http://nl.wikimedia.org">Dutch chapter</a> of the Wikimedia Foundation.
					The questions and explanations are written by <a href="http://nl.wikipedia.org/wiki/Gebruiker:Fruggo">Fruggo</a> 
					and multi-licensed under both the <a href="http://www.gnu.org/copyleft/fdl.html">GNU Free Documentation License</a> and 
					<a href="http://creativecommons.org/licenses/by-sa/2.5/">Creative Commons BY-SA 2.5</a>.
				</p>
			</div>
		</div> <!-- /wrapper -->
		
		<?php
            // only load this if we're not in a development environment :)
            if(!is_development_mode()) :
        ?>        
        		<!-- Clicky webstats -->        
            		<script src="http://static.getclicky.com/29850.js" type="text/javascript"></script>            		<noscript><p><img alt="Clicky" src="http://in.getclicky.com/29850-db4.gif" /></p></noscript>		
        		<!-- /Clicky webstats -->
        		<!-- Google Analytics -->
                    <script type="text/javascript">
                    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
                    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
                    </script>
                    <script type="text/javascript">
                    try {
                    var pageTracker = _gat._getTracker("UA-8050986-7");
                    pageTracker._trackPageview();
                    } catch(err) {}</script>        		
        		<!-- /Google Analytics -->
		<?php
            endif; 
        ?>
	</body>
</html>