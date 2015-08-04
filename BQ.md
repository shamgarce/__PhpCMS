摘要]本文介绍phpcms v9中模板标签使用说明。

{template "content","header"} 

调用根目录下phpcms\template\content\header文件

{CHARSET} 

字符集 （gbk或者utf-8）

{if isset($SEO['title']) && !empty($SEO['title'])}
{$SEO['title']}{/if}
{$SEO['site_title']}
{$SEO['keyword']}
{$SEO['description']}

标题和标题seo优化

{CSS_PATH} 

地址替换为根目录下\statics\css

{JS_PATH}

地址替换为根目录下\statics\js

{pc:content  action="position" posid="9" order="id" num="10" cache="3600"}

pc标签{pc:content 参数名="参数值"参数名="参数值"参数名="参数值"}

{loop $data $k $v}
      <li><a href="{$v[url]}">{$v[title]}</a></li>
{/loop}

pc标签值

action="position"--------------对话框的类型=“内容推荐位列表”
posid="9"----------------------推荐位ID="9"
order="id"---------------------排序类型="id"
num="10" ----------------------数据调用数量="10"
cache="3600"-------------------缓存="3600"毫秒

{get_siteid()}
{IMG_PATH}
action="hits" 排行，热点等
action="lists" 主要用于列表等。
catid="$catid" 当前栏目ID   指定数字，即为指定的栏目
num=""  调用文章的数量
order="id DESC" 按ID降序排列
order="id ASC"  按ID升序排列
"views DESC" 
sort=""
"1" 缩略图
return=""
page="$page" 需要分页

每当列表几行的时候出现一次这个

{if $num%2==0}   {/if}

循环标签

{loop $data $r}  {/loop}
{loop $info $r}  {/loop}

日期-------------{date('Y-m-d H:i:s',$r[inputtime])}
文章链接------{$r[url]}
文章标题------{$r[title]}
标题截取------{str_cut($r[title],40,'...')}
缩略图---------loop是info的时候用  {thumb($r[thumb],110,0)}     loop是data的时候用{thumb($v[thumb],90,0)}
分页标签------{$pages}

文章页标签

标题-------{$title}
内容-------{$content}
日期-------{$inputtime}
来源-------{$copyfrom}
点击数------<span id="hits"></span>  

<script language="JavaScript" src="{APP_PATH}api.php?op=count&id={$id}&modelid={$modelid}"></script>

网站首页----------------{siteurl($siteid)}
当前位置----------------{catpos($catid)}
栏目名称----------------{$CAT[catname]} 
栏目拼音----------------{$CAT[letter]}
栏目链接----------------{$CAT[url]}
父栏目名称--------------{$CATEGORYS[$CAT[parentid]][catname]} 
父栏目链接--------------{$CATEGORYS[$CAT[parentid]][url]}
上上级栏目名称--------{$CATEGORYS[$CATEGORYS[$CAT[parentid]][parentid]][catname]}
上上级栏目链接--------{$CATEGORYS[$CATEGORYS[$CAT[parentid]][parentid]][url]}

 一级父栏目列表

{pc:content action="category" catid="0" num="34" siteid="$siteid" order="listorder ASC"}
      {loop $data $r}
            <li><a href="{$r[url]}">{$r[catname]}</a></li>
      {/loop}
{/pc}

同级栏目列表

{pc:content action="category" catid="$parentid" num="12" siteid="$siteid" order="listorder ASC"}
      {loop $data $r}
            <li><a href="{$r[url]}">{$r[catname]}</a></li>
       {/loop}
{/pc}

组图列表

{loop $photos $r} 
<li><a href="{$r[url]}"><img src="{thumb($r[url], 75, 45, 0)}" alt="{$r[alt]}" /></a></li>
{/loop}

注释：其中$photos为自定义组图字段，{$r[url]}为图片地址，{thumb($r[url], 75, 45, 0)}为图片缩略图，{$r[alt]}为图片描述