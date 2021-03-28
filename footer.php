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
        <p>&copy; <?php echo date('Y'); ?> <a
                href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. Powered by <a
                href="http://www.typecho.org" target="_blank">Typecho</a> &amp; <a href="http://ronpy.com"
                target="_blank">Frozen</a> (<a href="http://www.offodd.com/17.html" target="_blank">Initial</a>).</p>
        <?php if ($this->options->ICPbeian): ?>
        <p><a href="http://beian.miit.gov.cn" class="icpnum" target="_blank"
                rel="nofollow"><?php $this->options->ICPbeian(); ?></a></p>
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
            <audio id="audio" preload="none"></audio>
        </li>
        <?php endif; ?>
    </ul>
</div>
<?php endif; if ($this->options->PjaxOption || $this->options->AjaxLoad): ?>
<script
    src="//<?php if ($this->options->cjCDN == 'bc'): ?>cdn.bootcss.com/jquery/2.1.4/jquery.min.js<?php elseif ($this->options->cjCDN == 'cf'): ?>cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js<?php else: ?>cdn.jsdelivr.net/npm/jquery@2.1.4/dist/jquery.min.js<?php endif; ?>">
</script>
<?php endif; if ($this->options->PjaxOption): ?>
<script
    src="//<?php if ($this->options->cjCDN == 'bc'): ?>cdn.bootcss.com/jquery.pjax/2.0.1/jquery.pjax.min.js<?php elseif ($this->options->cjCDN == 'cf'): ?>cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js<?php else: ?>cdn.jsdelivr.net/npm/jquery-pjax@2.0.1/jquery.pjax.min.js<?php endif; ?>">
</script>
<script>
jQuery.fn.Shake = function(n, d) {
    this.each(function() {
        var jSelf = $(this);
        jSelf.css({
            position: 'relative'
        });
        for (var x = 1; x <= n; x++) {
            jSelf.animate({
                left: (-d)
            }, 50).animate({
                left: d
            }, 50).animate({
                left: 0
            }, 50)
        }
    });
    return this
};
$(document).pjax('a:not(a[target="_blank"], a[no-pjax])', {
    container: '#main',
    fragment: '#main',
    timeout: 10000
}).on('submit', 'form[id=search], form[id=comment-form]', function(event) {
    $.pjax.submit(event, {
        container: '#main',
        fragment: '#main',
        timeout: 10000
    })
}).on('pjax:send', function() {
    $("#header").prepend("<div id='bar'></div>")
}).on('pjax:complete', function() {
    setTimeout(function() {
        $("#bar").remove()
    }, 300);
    $('#header').removeClass("on");
    $('#s').val("");
    <?php if ($this->options->SidebarFixed): ?>$("#secondary").removeAttr("style");
    <?php endif; ?>
}).on('pjax:end', function() {
    <?php if ($this->options->AjaxLoad): ?>al();
    <?php endif; ?>cl();
    ac();
    ap();
    <?php if ($this->options->CustomContent): ?>if(typeof _hmt !== 'undefined') {
        _hmt.push(['_trackPageview', location.pathname + location.search])
    };
    if (typeof ga !== 'undefined') {
        ga('send', 'pageview', location.pathname + location.search)
    }
    <?php endif; ?>Prism.highlightAll();
    <?php if ($this->options->baiduPush): ?>bp();
    <?php endif; ?>
});

function ac() {
    $body = $('html,body');
    var g = '.comment-list',
        h = '.comment-num',
        i = '.comment-reply a',
        wi = '.whisper-reply',
        j = '#textarea',
        k = '',
        l = '';
    c();
    $('#comment-form').submit(function() {
        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: $(this).serializeArray(),
            error: function() {
                alert("提交失败，请检查网络并重试或者联系管理员。");
                return false
            },
            success: function(d) {
                if (!$(g, d).length) {
                    alert("您输入的内容不符合规则或者回复太频繁，请修改内容或者稍等片刻。");
                    return false
                } else {
                    k = $(g, d).html().match(/id=\"?comment-\d+/g).join().match(/\d+/g).sort(
                        function(a, b) {
                            return a - b
                        }).pop();
                    if ($('.page-navigator .prev').length && l == "") {
                        k = ''
                    }
                    if (l) {
                        d = $('#li-comment-' + k, d).hide();
                        if ($('#' + l).find(".comment-children").length <= 0) {
                            $('#' + l).append(
                                "<div class='comment-children'><ol class='comment-list'><\/ol><\/div>"
                            )
                        }
                        if (k) $('#' + l + " .comment-children .comment-list").prepend(d);
                        l = ''
                    } else {
                        d = $('#li-comment-' + k, d).hide();
                        if (!$(g).length) $('#comments').prepend(
                            "<h3>已有 <span class='comment-num'>0<\/span> 条评论<\/h3><ol class='comment-list'><\/ol>"
                        );
                        $(g).prepend(d)
                    }
                    $('#li-comment-' + k).fadeIn();
                    var f;
                    $(h).length ? (f = parseInt($(h).text().match(/\d+/)), $(h).html($(h).html()
                        .replace(f, f + 1))) : 0;
                    TypechoComment.cancelReply();
                    $(j).val('');
                    $(i + ',' + wi + ', #cancel-comment-reply-link').unbind('click');
                    c();
                    if (k) {
                        $body.animate({
                            scrollTop: $('#li-comment-' + k).offset().top - 50
                        }, 300)
                    } else {
                        $body.animate({
                            scrollTop: $('#comments').offset().top - 50
                        }, 300)
                    }
                }
            }
        });
        return false
    });

    function c() {
        $(i + ',' + wi).click(function() {
            l = $(this).parent().parent().parent().attr("id")
        });
        $('#cancel-comment-reply-link').click(function() {
            l = ''
        })
    }
}
ac();
var protoken = '<?php echo Typecho_Widget::widget('Widget_Security')->getTokenUrl('Token'); ?>'.replace('Token', "");

function ap() {
    $('.protected .post-title a, .protected .more a').click(function() {
        var a = $(this).parent().parent();
        a.find('.word').text("请输入密码访问").css('color', 'red').Shake(2, 10);
        a.find(':password').focus();
        return false
    });
    $('.protected form').submit(function() {
        ap_btn = $(this);
        ap_m = ap_btn.parent().find('.more a');
        ap_n = ap_btn.find('.word');
        $(ap_m).addClass('loading').text("请稍等");
        <?php if (!$this->options->AjaxLoad): ?>apt();
        <?php else: ?>aps();
        <?php endif; ?>return false
    })
}
ap();
<?php if (!$this->options->AjaxLoad): ?>function apt() {
    var b = $('.protected .post-title a').attr("href");
    if ($('h1.post-title').length) {
        aps()
    } else {
        $.ajax({
            url: window.location.href,
            success: function(d) {
                protoken = $('.protected form[action^="' + b + '"]', d).attr("action").replace(b, "");
                if (protoken) {
                    aps()
                } else {
                    $(ap_m).removeAttr("class").text("- 阅读全文 -");
                    ap_n.text("提交失败，请检查网络并重试或者联系管理员。").css('color', 'red').Shake(2, 10);
                    return false
                }
            }
        })
    }
}
<?php endif; ?>function aps() {
    var c = ap_btn.parent().parent().find('.post-title a').attr("href");
    $.ajax({
        url: c + protoken,
        type: 'post',
        data: ap_btn.serializeArray(),
        error: function() {
            $(ap_m).removeAttr("class").text("- 阅读全文 -");
            ap_n.text("提交失败，请检查网络并重试或者联系管理员。").css('color', 'red').Shake(2, 10);
            return false
        },
        success: function(d) {
            if (!$('h1.post-title', d).length) {
                $(ap_m).removeAttr("class").text("- 阅读全文 -");
                ap_n.text("对不起,您输入的密码错误。").css('color', 'red').Shake(2, 10);
                $(":password").val("");
                return false
            } else {
                $(ap_m).removeAttr("class").text("- 阅读全文 -");
                $('h1.post-title').length ? $.pjax.reload({
                    container: '#main',
                    fragment: '#main',
                    timeout: 10000
                }) : $.pjax({
                    url: c,
                    container: '#main',
                    fragment: '#main',
                    timeout: 10000
                })
            }
        }
    })
}
</script>
<?php endif; if ($this->options->AjaxLoad): ?>
<script>
var isbool = true;
<?php if ($this->options->AjaxLoad == 'auto'): ?>$(window).scroll(function() {
    if (isbool && $('.ajaxload .next a').attr("href") && ($(this).scrollTop() + $(window).height() + 20) >= $(
            document).height()) {
        isbool = false;
        aln()
    }
});
<?php endif; ?>function al() {
    $('.ajaxload li[class!="next"]').remove();
    $('.ajaxload .next a').click(function() {
        if (isbool) {
            aln()
        }
        return false
    })
}
al();

function aln() {
    var a = '.ajaxload .next a',
        b = $(a).attr("href");
    $(a).addClass('loading').text("正在加载");
    if (b) {
        $.ajax({
            url: b,
            error: function() {
                alert('请求失败，请检查网络并重试或者联系管理员');
                $(a).removeAttr("class").text("查看更多");
                return false
            },
            success: function(d) {
                var c = $(d).find("#main .post"),
                    e = $(d).find(a).attr("href");
                if (c) {
                    $('.ajaxload').before(c)
                };
                $(a).removeAttr("class");
                if (e) {
                    $(a).text("查看更多").attr("href", e)
                } else {
                    $(a).remove();
                    $('.ajaxload .next').text('没有更多文章了')
                }
                if ($('.protected', d).length) {
                    $('.protected *').unbind();
                    ap()
                }
                isbool = true;
                return false
            }
        })
    }
}
</script>
<?php endif; ?>
<?php $this->footer(); ?>
<?php if ($this->options->scrollTop || $this->options->HeadFixed || $this->options->SidebarFixed): ?>
<script>
window.onscroll = function() {
    var a = document.documentElement.scrollTop || document.body.scrollTop;
    <?php if ($this->options->scrollTop): ?>var b = document.getElementById("top");
    if (a >= 200) {
        b.removeAttribute("class")
    } else {
        b.setAttribute("class", "hidden")
    }
    b.onclick = function totop() {
        var a = document.documentElement.scrollTop || document.body.scrollTop;
        if (a > 0) {
            requestAnimationFrame(totop);
            window.scrollTo(0, a - (a / 5))
        } else {
            cancelAnimationFrame(totop)
        }
    };
    <?php endif; if ($this->options->HeadFixed): ?>var d = document.getElementById("header");
    if (a > 0 && a < 30) {
        d.style.padding = (15 - a / 2) + "px 0"
    } else if (a >= 30) {
        d.style.padding = 0
    } else {
        d.removeAttribute("style")
    };
    <?php endif; if ($this->options->SidebarFixed): ?>var e = document.getElementById("main");
    var f = document.getElementById("secondary");
    var g = document.documentElement.clientHeight;
    var h = <?php echo $this->options->HeadFixed ? 0 : 41 ?>;
    if (e.offsetHeight > f.offsetHeight) {
        if (f.offsetHeight > g - 71 && a > f.offsetHeight + 101 - g) {
            if (a < e.offsetHeight + 101 - g) {
                f.style.marginTop = (a - f.offsetHeight - 101 + g) + "px"
            } else {
                f.style.marginTop = (e.offsetHeight - f.offsetHeight) + "px"
            }
        } else if (f.offsetHeight <= g - 71 && a > 30 + h) {
            if (a < e.offsetHeight - f.offsetHeight + h) {
                f.style.marginTop = (a - 30 - h) + "px"
            } else {
                f.style.marginTop = (e.offsetHeight - f.offsetHeight - 30) + "px"
            }
        } else {
            f.removeAttribute("style")
        }
    }
    <?php endif; ?>
}
</script>
<?php endif; if ($this->options->MusicSet && $this->options->MusicUrl): ?>
<script>
(function() {
    var a = document.getElementById("audio");
    var b = document.getElementById("music");
    var c = <?php Playlist() ?>;
    <?php if ($this->options->MusicVol): ?>var d = <?php $this->options->MusicVol(); ?>;
    if (d >= 0 && d <= 1) {
        a.volume = d
    }
    <?php endif; ?>a.src = c.shift();
    a.addEventListener('play', g);
    a.addEventListener('pause', h);
    a.addEventListener('ended', f);
    a.addEventListener('error', f);
    a.addEventListener('canplay', j);

    function f() {
        if (!c.length) {
            a.removeEventListener('play', g);
            a.removeEventListener('pause', h);
            a.removeEventListener('ended', f);
            a.removeEventListener('error', f);
            a.removeEventListener('canplay', j);
            b.style.display = "none";
            alert("本站的背景音乐好像有问题了，希望您可以通过留言等方式通知管理员，谢谢您的帮助。")
        } else {
            a.src = c.shift();
            a.play()
        }
    }

    function g() {
        b.setAttribute("class", "play");
        a.addEventListener('timeupdate', k)
    }

    function h() {
        b.removeAttribute("class");
        a.removeEventListener('timeupdate', k)
    }

    function j() {
        c.push(a.src)
    }

    function k() {
        b.getElementsByTagName("i")[0].style.width = (a.currentTime / a.duration * 100).toFixed(1) + "%"
    }
    b.onclick = function() {
        if (a.canPlayType('audio/mpeg') != "" || a.canPlayType('audio/ogg;codes="vorbis"') != "" || a
            .canPlayType('audio/mp4;codes="mp4a.40.5"') != "") {
            if (a.paused) {
                if (a.error) {
                    f()
                } else {
                    a.play()
                }
            } else {
                a.pause()
            }
        } else {
            alert("对不起，您的浏览器不支持HTML5音频播放，请升级您的浏览器。")
        }
    };
    b.removeAttribute("class")
})();
</script>
<?php endif; if ($this->options->CustomContent): $this->options->CustomContent(); ?>
<?php endif; if ($this->options->baiduPush): ?>
<script>
function bp() {
    var canonicalURL, curProtocol;
    var x = document.getElementsByTagName("link");
    if (x.length > 0) {
        for (i = 0; i < x.length; i++) {
            if (x[i].rel.toLowerCase() == 'canonical' && x[i].href) {
                canonicalURL = x[i].href;
            }
        }
    }
    if (!canonicalURL) {
        curProtocol = window.location.protocol.split(':')[0];
    } else {
        curProtocol = canonicalURL.split(':')[0];
    }
    if (!canonicalURL) canonicalURL = window.location.href;
    ! function() {
        var e = /([http|https]:\/\/[a-zA-Z0-9\_\.]+\.baidu\.com)/gi,
            r = canonicalURL,
            t = document.referrer;
        if (!e.test(r)) {
            var n = (String(curProtocol).toLowerCase() === 'https') ?
                "https://sp0.baidu.com/9_Q4simg2RQJ8t7jm9iCKT-xh_/s.gif" : "//api.share.baidu.com/s.gif";
            t ? (n += "?r=" + encodeURIComponent(document.referrer), r && (n += "&l=" + r)) : r && (n += "?l=" + r);
            var i = new Image;
            i.src = n
        }
    }(window);
}
bp();
</script>
<?php endif; ?>
<script>
var cornertool = true;

function cl() {
    var a = document.getElementById("catalog-col"),
        b = document.getElementById("catalog"),
        c = document.getElementById("cornertool"),
        d;
    if (a && !b) {
        if (c) {
            c = c.getElementsByTagName("ul")[0];
            d = document.createElement("li");
            d.setAttribute("id", "catalog");
            d.setAttribute("onclick", "Catalogswith()");
            d.appendChild(document.createElement("span"));
            c.appendChild(d)
        } else {
            cornertool = false;
            c = document.createElement("div");
            c.setAttribute("id", "cornertool");
            c.innerHTML = '<ul><li id="catalog" onclick="Catalogswith()"><span></span></li></ul>';
            document.body.appendChild(c)
        }
        document.getElementById("catalog").className = a.className
    }
    if (!a && b) {
        cornertool ? c.getElementsByTagName("ul")[0].removeChild(b) : document.body.removeChild(c)
    }
    if (a && b) {
        b.className = a.className
    }
}
cl();
console.log("\n%c Frozen By muumlover %c http://ronpy.com ", "color:#fff;background:#000;padding:5px 0",
    "color:#fff;background:#666;padding:5px 0")
</script>
<script
    src="//<?php if ($this->options->cjCDN == 'bc'): ?>cdn.bootcss.com/prism/<?php elseif ($this->options->cjCDN == 'cf'): ?>cdnjs.cloudflare.com/ajax/libs/prism/<?php else: ?>cdn.jsdelivr.net/npm/prismjs@<?php endif; ?><?php $this->options->prismVersion() ?>/prism.js">
</script>
<script
    src="//<?php if ($this->options->cjCDN == 'bc'): ?>cdn.bootcss.com/prism/<?php elseif ($this->options->cjCDN == 'cf'): ?>cdnjs.cloudflare.com/ajax/libs/prism/<?php else: ?>cdn.jsdelivr.net/npm/prismjs@<?php endif; ?><?php $this->options->prismVersion() ?>/plugins/autoloader/prism-autoloader.js"
    data-autoloader-path="https://cdn.bootcss.com/prism/1.17.1/components/"></script>
</body>

</html>
<?php if ($this->options->compressHtml): $html_source = ob_get_contents(); ob_clean(); print compressHtml($html_source); ob_end_flush(); endif; ?>