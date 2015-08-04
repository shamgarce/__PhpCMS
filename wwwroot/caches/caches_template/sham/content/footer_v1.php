<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="foot">
		<div class="ft_t">
			<div class="ft_rl">
				<dl>
					<dt>关于肺康复网</dt>
					<dd><a href="">关于我们</a></dd>
					<dd><a href="">网站帮助</a></dd>
					<dd><a href="">隐私政策</a></dd>
					<dd><a href="">投稿通道</a></dd>
				</dl>
				<dl class="ltan">
					<dt>肺康复论坛</dt>
					<dd><a href="">联系我们</a></dd>
					<dd><a href="">网站地图</a></dd>
					<dd><a href="">版权声明</a></dd>
					<dd><a href="">意见反馈</a></dd>
				</dl>
			</div>
			<div class="ft_tr">
				<a href="">
					<img src="/statics/sham/images/ewm1.jpg" alt="">
					<h3>肺康复网论坛</h3>
				</a>
				<a href="">
					<img src="/statics/sham/images/ewm2.jpg" alt="">
					<h3>呼吸大讲堂</h3>
				</a>
				<a href="">
					<img src="/statics/sham/images/ewm3.jpg" alt="">
					<h3>费医生APP</h3>
				</a>
			</div>
		</div>
		<div class="ft_b">
			<div class="ft_info">
				<span>友情链接：</span>
                
                
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=998088a9e7341bc0a955bc1dbdd019ac&action=type_list&siteid=1&order=listorder+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$data = $link_tag->type_list(array('siteid'=>'1','order'=>'listorder DESC','limit'=>'20',));}?>
<?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>
<a href="<?php echo $r['url'];?>" title="<?php echo $r['name'];?>"><?php echo $r['name'];?></a>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
			<p>声明：本站图/文均来自于网络收集，仅供病友参考，不作为医疗诊断依据。      投诉电话：400-000-0000（7×24小时）</p>
			<p>Copyright ⓒ 2015-2018 <?php echo $PHPCMS['sitename'];?> phpcms网站管理系统 肺康复网（<?php echo siteurl($siteid);?>）京ICP备1345561号-1</p>
			<p>互联网nag药品信息服务资格证书ICP证书</p>
		</div>
	</div>
    	<?php echo $SEO['site_title'];?>
<?php echo $SEO['keyword'];?>
<?php echo $SEO['description'];?>

</body>
</html>