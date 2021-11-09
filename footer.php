<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div>
</div>
<footer id="footer">
<div class="container">
<?php if (!empty($this->options->ShowLinks) && in_array('footer', $this->options->ShowLinks)): ?>
<ul class="links">
<?php Links($this->options->IndexLinksSort); ?>
<?php if (FindContents('page-links.php', 'order', 'a', 1)): ?>
<li><a href="<?php echo FindContents('page-links.php', 'order', 'a', 1)[0]['permalink']; ?>">更多...</a></li>
<?php endif; ?>
</ul>
<?php endif; ?>
<p>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. Powered by <a href="http://www.typecho.org" target="_blank">Typecho</a> &amp; <a href="http://ronpy.com" target="_blank">Frozen</a> (<a href="http://www.offodd.com/17.html" target="_blank">Initial</a>).</p>
<?php if ($this->options->ICPbeian): ?>
<p><a href="http://beian.miit.gov.cn" class="icpnum" target="_blank" rel="nofollow"><?php $this->options->ICPbeian(); ?></a></p>
<?php endif; if ($this->options->AjaxLoad): ?>
<input id="token" type="hidden" value="<?php echo Typecho_Widget::widget('Widget_Security')->getTokenUrl('Token'); ?>" readonly="readonly" />
<?php endif; ?>
<a data-v-a478af14="" href="https://www.upyun.com/?utm_source=lianmeng&utm_medium=referral" class="logo router-link-active">
<img data-v-a478af14="" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiIHdpZHRoPSI3OXB4IiBoZWlnaHQ9IjQwcHgiIHZpZXdCb3g9IjAgMCA3OSA0MCIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNzkgNDAiIHhtbDpzcGFjZT0icHJlc2VydmUiPiAgPGltYWdlIGlkPSJpbWFnZTAiIHdpZHRoPSI3OSIgaGVpZ2h0PSI0MCIgeD0iMCIgeT0iMCIKICAgIGhyZWY9ImRhdGE6aW1hZ2UvcG5nO2Jhc2U2NCxpVkJPUncwS0dnb0FBQUFOU1VoRVVnQUFBRThBQUFBb0NBTUFBQUNJRzFkV0FBQUFCR2RCVFVFQUFMR09mUHRSa3dBQUFDQmpTRkpOCkFBQ0hEd0FBakE4QUFQMVNBQUNCUUFBQWZYa0FBT21MQUFBODVRQUFHY3h6UElWM0FBQUN4MUJNVkVVQUFBQUEvLzhBb1A0QW9QNEEKb1A0QW9QNEFuLzRBbi80QW9mNEFvLzRBbi80QW4vNEFuLzRBcXY4QUFQOEFuLzRBb1A0QW9QNEFtZjhBb1A0QW9QNEFuLzRBcXY4QQpuLzhBb1A0QW5QNEFvUDRBb1A0QWtmNEFvUDRBbi80QW92NEFvUDhBb1A0QW4vNEFuLzRBbi84QW4vNEFuLzRBbFA4QW9mNEFvLzRBCm4vOEFvZjRBcXY4QW4vNEFvUDRBb1A0QW9QNEFvUDRBb1A0QWYvOEFvUDRBbi80QW9mOEFuLzRBbi80QW4vNEFudjRBb1A0QW9mNEEKb1A0QW9QNEFuLzRBbi80QW9QNEFtZjhBbi80QW9QNEFvUDRBb1A0QW9mNEFuLzRBbi80QS8vOEFudjRBb1A0QW4vOEFvZjRBb1A0QQpvZjRBb2Y0QW4vNEFvUDRBb1A0QW4vOEFvZjRBb1A0QW4vNEFvUDRBbmY0QW4vNEFvUDRBb1A0QW9QNEFuLzhBbi80QW9QNEFvUDRBCm4vNEFvUDRBb1A0QW9QNEFvUDRBbnY0QW9QNEFuLzRBbi80QW52NEFuLzRBbi84QW52NEFwZjhBbnY0QW4vNEFvZjRBb1A0QW52NEEKb1A0QW4vNEFvUDRBb1A0QW9QNEFvUDRBb1A0QW52NEFvUDRBbi80QW92NEFvUDRBbnY0QW9QNEFvUDRBb1A0QW9QNEFuLzRBbi80QQpvLzRBbnY0QW9QNEFvUDRBbi84QW8vNEFvUDRBb2Y0QW4vOEFtLzRBbi80QW92NEFuZjhBb2Y0QXFmNEFuLzRBbi80QW4vNEFvZjRBCm5mNEFvUDRBblA0QW9QNEFuZjRBb1A4QW9QNEFuUDRBbi80QW9QNEFvUDRBb1A0QW9QNEFvUDRBbi84QW4vNEFuLzRBb1A0QW9QOEEKbnY0QW9QNEFuZjRBb2Y0QW9QNEFuZjRBbnY0QW4vNEFuLzhBbi80QW4vNEFuLzRBb3Y0QW9QNEFvZjhBb1A0QW9QNEFxdjhBbi80QQpuLzRBbi84QW4vNEFtZjhBbi80QW4vNEF2LzhBbmY0QWYvOEFtUDRBbnY0QW4vNEFvUDRBby80QW9QNEFuLzRBbi80QW52NEFuLzRBCm9QNEFvZjRBbi80QW4vNEFvUDRBb2Y4QW4vNEFvUDRBbi80QW4vNEFvZjRBbS80QW9QNEFvZjRBb1A0QW9QNEFuLzRBbS80QW9QNEEKc3Y4QW4vNEFvZjRBb1AvLy8vOUFxTXUwQUFBQTYzUlNUbE1BQVNOV2VZZDdXQ1lPZGRsakF3RmQ2dElLaisxbEJxRHlKMVNuQjYxYgpKUEMzaHBrSXpwVU1TaGxRVHd3NC9kK0JTUzRDbC81RWJxdERIV2svczdMRC9Id0ZjNG0xMEhYbzR3SjNyQmcwL2w4VHNLTEZLR3FFCmk0d1ZvYy9ibWxXMTJwUm85ZnI0ODBYbTF1UTF6U0NDRkMzYlRCdEtQdmpOK3phQzd6MmszaGFSb3V1U1hKL3preHd5VWZZUU1uRlMKTUNsckx6eDlDZm16cUhKTTV3M1hLcXJsR3V6ZGJFNHJaMERCbmw3TVIrQXZWL2RjZXViQTYvYkxMRVk4NHE4UHhraXFvdy83N2dRLwpCQmxmdWJvOWIrV2RZdUg1T2RQUlpCNVRRWVdEaFJKL2FNckVteVN3Q281YWd6ZWVNQUFBQUFGaVMwZEU3Q0c1c3hzQUFBQUpjRWhaCmN3QUFEc1FBQUE3RUFaVXJEaHNBQUFBSGRFbE5SUWZsQXh3SEh5KzA5cGNrQUFBRFNrbEVRVlJJeDJOZ0dBV2pnRHpBeU1UTXdzckcKenNGSUZkTTR1YmhmUXdBUEF5L0Zwdkh4QzBCTmV5MG9KQ3dpU3FFYnhjUmhwcjJXa0pRQ2t0SXlsQmpIS3dzMzdyV2N2QUtJVWhTagp3RHdsaEhIS0txb1FoaG9PdGVvYW9ORFYxTkxTMHRiQm9VUlhEMktFdm9HaGtiRUoxR0JUTTRpa3VRVU1RR3l3ZkcwRkpLMUJTbXpBCkFteTJFR0NuQ1RQUEhteUFnNk9Ua2JPTEs5eWxicEE0Y1ZlRUFnOVBKUE84T0lFQW90dmJCd0lzZktIRytZRzErd2NFQnZtL1JnYVcKcUw0SURnRVNvV0hLcjhPdGZTTWl3U0FpQ3B0M0k4QzZvNFZVWVFiRkdNU0NxRGlJZEh3Q2hFNU1BaExKS2FtdjA5SXpYbWRtQVVIMgo2eHhzNXVXQ2ZadVhEek11dFlDaEVFUVhRYVNMVFV0QUZNZHJMUkJsWFBwYTNsanlkUm1JYllUVlBMRnlrT1lLTHcrWWVaVldERlZnCmN5RnBVRDNGSEVSVjE2akF3MC95ZFMySVdRZzB6NG9EQ1lCVjVKbUNOTmVWSUFLdXZxRVJURU1qckVrUUdETTZ6UzBNV014akZFRU8KOFZhUUtCTTRGdHFpMmhIaVJoMWdxaE5pUXBkcE53T0RRUThvV2hsNisvcGZUNWc0NmZYa1BpQUlBTHB2eXRTcFU2ZTlscTZkQ2dMZwpHSitlQ3M0V0RFWjZNT05tQ00wRUI2a1FORVJtMWF0UFRLMEdNMmVERmN5QnFZU0VuOTNjZWNnQk9COGtzNERCS1FXbWFxRjZPb2hhCnhBZFZzSGlKNHRJS1NQNmJWN2pzOWZJVm9hOVhGZ0tCSE1TOFZhOUZVU0pFR2FSNWRmRWFtSEVpZWM0UVkrRXExcjVPellPeDBlSUQKR09QcllveUJsQXk4a0Z1UGtvcGZiOGpaQ0hIcEpwaUNQTUhOcG5GaXVNemJZcm9LbkR5M3dwUWJjOFBOMnJiZEoxbG8xUTR3T3h0cQpndkhhbXFMUVRUdDM3WVp3OTd3dWdabTM5L1VLb0x2MjdRZUxDNHNjZ0Jrb0JUUHU0SFRld0VPSDlXREZORGpBNUNwTWp4d0ZwbDNCClk4cWhRRDd2bXVNbmdPYWRCRElMVnV1ZlltQ1k5Tm9RclBCMFpUN01QRDVvOGRkc2RhWWM3dFN6NE9KQS9KakR1Zk5nUlU0WEx2cGYKWXBES3Jyek1BRFJQWk1PR0sxZWJyNEhFNXg5WEJZSHJyNWNZd3d6a3ZBRXlRVTlqNDJhNGNZbUJZSm1iSzIvQlk4WHB0amJEbmJ1RgpJRWZmdTMvLy90MlZEOERDRFEvVklPQVJJb3FqSGdPTmNPRk1oQnQzbzRTQklxRFNvdmZreEN5WWFhWlAxU2t6RGdpZXpWc09LMStlClYxRnNHZ2k4WUkrMHNMVjQrYXFBS3FhTmdsRkFHQUFBcmk4L2c1TkRRNFVBQUFBbGRFVllkR1JoZEdVNlkzSmxZWFJsQURJd01qRXQKTURNdE1qaFVNRGM2TXpFNk5EY3JNREE2TURCVmM3QUFBQUFBSlhSRldIUmtZWFJsT20xdlpHbG1lUUF5TURJeExUQXpMVEk0VkRBMwpPak14T2pRM0t6QXdPakF3SkM0SXZBQUFBQUJKUlU1RXJrSmdnZz09IiAvPgo8L3N2Zz4K" />
</a>
</div>
</footer>
<?php if ($this->options->scrollTop || ($this->options->MusicSet && $this->options->MusicUrl)): ?>
<div id="cornertool">
<ul>
<?php if ($this->options->scrollTop): ?>
<li id="top" class="hidden"></li>
<?php endif; ?>
<?php if ($this->options->MusicSet && $this->options->MusicUrl): ?>
<li id="music" class="hidden">
<span><i></i></span>
<audio id="audio" data-src="<?php Playlist() ?>"<?php if ($this->options->MusicVol): ?> data-vol="<?php $this->options->MusicVol(); ?>"<?php endif; ?> preload="none"></audio>
</li>
<?php endif; ?>
</ul>
</div>
<?php endif; if ($this->options->PjaxOption || $this->options->AjaxLoad): ?>
<script src="//<?php if ($this->options->cjCDN == 'cf'): ?>cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js<?php elseif ($this->options->cjCDN == 'sc'): ?>cdn.staticfile.org/jquery/2.1.4/jquery.min.js<?php elseif ($this->options->cjCDN == 'bc'): ?>cdn.bootcss.com/jquery/2.1.4/jquery.min.js<?php else: ?>cdn.jsdelivr.net/npm/jquery@2.1.4/dist/jquery.min.js<?php endif; ?>"></script>
<?php endif; if ($this->options->PjaxOption): ?>
<script src="//<?php if ($this->options->cjCDN == 'cf'): ?>cdnjs.cloudflare.com/ajax/libs/jquery.pjax/<?php elseif ($this->options->cjCDN == 'sc'): ?>cdn.staticfile.org/jquery.pjax/<?php elseif ($this->options->cjCDN == 'bc'): ?>cdn.bootcss.com/jquery.pjax/<?php else: ?>cdn.jsdelivr.net/npm/jquery-pjax@<?php endif; ?>2.0.1/jquery.pjax.min.js"></script>
<?php endif; if ($this->options->prismTheam):?>
<script async src="//<?php if ($this->options->cjCDN == 'cf'): ?>cdnjs.cloudflare.com/ajax/libs/prism/<?php elseif ($this->options->cjCDN == 'sc'): ?>cdn.staticfile.org/prism/<?php elseif ($this->options->cjCDN == 'bc'): ?>cdn.bootcss.com/prism/<?php else: ?>cdn.jsdelivr.net/npm/prismjs@<?php endif; ?><?php $this->options->prismVersion() ?>/prism.js"></script>
<script defer src="//<?php if ($this->options->cjCDN == 'cf'): ?>cdnjs.cloudflare.com/ajax/libs/prism/<?php elseif ($this->options->cjCDN == 'sc'): ?>cdn.staticfile.org/prism/<?php elseif ($this->options->cjCDN == 'bc'): ?>cdn.bootcss.com/prism/<?php else: ?>cdn.jsdelivr.net/npm/prismjs@<?php endif; ?><?php $this->options->prismVersion() ?>/plugins/autoloader/prism-autoloader.js" data-autoloader-path="https://cdn.bootcss.com/prism/1.17.1/components/"></script>
<?php endif; ?>
<script src="<?php cjUrl('frozen.min.js') ?>"></script>
<?php if ($this->options->MusicSet && $this->options->MusicUrl): ?>
<script src="<?php cjUrl('frozen-music.min.js') ?>"></script>
<?php endif; if ($this->options->PjaxOption || $this->options->AjaxLoad): ?>
<script src="<?php cjUrl('frozen-ajax.min.js') ?>"></script>
<?php endif; ?>
<?php $this->footer(); ?>
<?php if ($this->options->CustomContent): $this->options->CustomContent(); ?>

<?php endif; ?>
</body>
</html><?php if ($this->options->compressHtml): $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); endif; ?>