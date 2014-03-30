




<!DOCTYPE html>
<html class=" ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>PHPMailer/class.smtp.php at master · PHPMailer/PHPMailer</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="PHPMailer/PHPMailer" name="twitter:title" /><meta content="PHPMailer - The classic email sending library for PHP" name="twitter:description" /><meta content="https://avatars2.githubusercontent.com/u/3959702?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars2.githubusercontent.com/u/3959702?s=400" property="og:image" /><meta content="PHPMailer/PHPMailer" property="og:title" /><meta content="https://github.com/PHPMailer/PHPMailer" property="og:url" /><meta content="PHPMailer - The classic email sending library for PHP" property="og:description" />

    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="BE2F8226:26C8:77FF177:532F847D" name="octolytics-dimension-request_id" /><meta content="5135378" name="octolytics-actor-id" /><meta content="GMGOD" name="octolytics-actor-login" /><meta content="a865fb49b43a5e96fcebee60ec7182e8a79ef87dde32e634aacb96a319b10e54" name="octolytics-actor-hash" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://github.global.ssl.fastly.net/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="5whi34AKyTPF0iIbq27r6gzY7yFwamrseyO5C7tOrsM=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-dd2e4ab77e94896e4418f4dd1d11ce1efb595fd1.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-f14002c8b8c821aeaeaf37b52de1d6c4d29dc214.css" media="all" rel="stylesheet" type="text/css" />
    


        <script crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/frameworks-1fdcfaa86258d75070622ace871ef84ed6e72cf0.js" type="text/javascript"></script>
        <script async="async" crossorigin="anonymous" src="https://github.global.ssl.fastly.net/assets/github-7e1a088b2bca0ded37a4fba91c2691508dc734bb.js" type="text/javascript"></script>
        
        
      <meta http-equiv="x-pjax-version" content="0778df758767b5af5f882e3e85af2587">

        <link data-pjax-transient rel='permalink' href='/PHPMailer/PHPMailer/blob/943e0bd529e98a99a0658879b696018ad92e09c7/class.smtp.php'>

  <meta name="description" content="PHPMailer - The classic email sending library for PHP" />

  <meta content="3959702" name="octolytics-dimension-user_id" /><meta content="PHPMailer" name="octolytics-dimension-user_login" /><meta content="2253830" name="octolytics-dimension-repository_id" /><meta content="PHPMailer/PHPMailer" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="2253830" name="octolytics-dimension-repository_network_root_id" /><meta content="PHPMailer/PHPMailer" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/PHPMailer/PHPMailer/commits/master.atom" rel="alternate" title="Recent Commits to PHPMailer:master" type="application/atom+xml" />

  </head>


  <body class="logged_in  env-production windows vis-public page-blob">
    <a href="#start-of-content" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      <div class="header header-logged-in true">
  <div class="container clearfix">

    <a class="header-logo-invertocat" href="https://github.com/">
  <span class="mega-octicon octicon-mark-github"></span>
</a>

    
    <a href="/notifications" aria-label="You have unread notifications" class="notification-indicator tooltipped tooltipped-s" data-gotokey="n">
        <span class="mail-status unread"></span>
</a>

      <div class="command-bar js-command-bar  in-repository">
          <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    data-username="GMGOD"
      data-repo="PHPMailer/PHPMailer"
      data-branch="master"
      data-sha="816a73ed78d8fc0782f20fe684b6422b8917918a"
  >

    <input type="hidden" name="nwo" value="PHPMailer/PHPMailer" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
        <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
            <li><a href="https://gist.github.com">Gist</a></li>
            <li><a href="/blog">Blog</a></li>
          <li><a href="https://help.github.com">Help</a></li>
        </ul>
      </div>

    


  <ul id="user-links">
    <li>
      <a href="/GMGOD" class="name">
        <img alt="GMGOD" class=" js-avatar" data-user="5135378" height="20" src="https://avatars0.githubusercontent.com/u/5135378?s=140" width="20" /> GMGOD
      </a>
    </li>

    <li class="new-menu dropdown-toggle js-menu-container">
      <a href="#" class="js-menu-target tooltipped tooltipped-s" aria-label="Create new...">
        <span class="octicon octicon-plus"></span>
        <span class="dropdown-arrow"></span>
      </a>

      <div class="new-menu-content js-menu-content">
      </div>
    </li>

    <li>
      <a href="/settings/profile" id="account_settings"
        class="tooltipped tooltipped-s"
        aria-label="Account settings ">
        <span class="octicon octicon-tools"></span>
      </a>
    </li>
    <li>
      <a class="tooltipped tooltipped-s" href="/logout" data-method="post" id="logout" aria-label="Sign out">
        <span class="octicon octicon-log-out"></span>
      </a>
    </li>

  </ul>

<div class="js-new-dropdown-contents hidden">
  

<ul class="dropdown-menu">
  <li>
    <a href="/new"><span class="octicon octicon-repo-create"></span> New repository</a>
  </li>
  <li>
    <a href="/organizations/new"><span class="octicon octicon-organization"></span> New organization</a>
  </li>


    <li class="section-title">
      <span title="PHPMailer/PHPMailer">This repository</span>
    </li>
      <li>
        <a href="/PHPMailer/PHPMailer/issues/new"><span class="octicon octicon-issue-opened"></span> New issue</a>
      </li>
</ul>

</div>


    
  </div>
</div>

      

        



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">

    <li class="subscription">
      <form accept-charset="UTF-8" action="/notifications/subscribe" class="js-social-container" data-autosubmit="true" data-remote="true" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="5whi34AKyTPF0iIbq27r6gzY7yFwamrseyO5C7tOrsM=" /></div>  <input id="repository_id" name="repository_id" type="hidden" value="2253830" />

    <div class="select-menu js-menu-container js-select-menu">
      <a class="social-count js-social-count" href="/PHPMailer/PHPMailer/watchers">
        218
      </a>
      <span class="minibutton select-menu-button with-count js-menu-target" role="button" tabindex="0" aria-haspopup="true">
        <span class="js-select-button">
          <span class="octicon octicon-eye-watch"></span>
          Watch
        </span>
      </span>

      <div class="select-menu-modal-holder">
        <div class="select-menu-modal subscription-menu-modal js-menu-content" aria-hidden="true">
          <div class="select-menu-header">
            <span class="select-menu-title">Notification status</span>
            <span class="octicon octicon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-list js-navigation-container" role="menu">

            <div class="select-menu-item js-navigation-item selected" role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input checked="checked" id="do_included" name="do" type="radio" value="included" />
                <h4>Not watching</h4>
                <span class="description">You only receive notifications for conversations in which you participate or are @mentioned.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-watch"></span>
                  Watch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_subscribed" name="do" type="radio" value="subscribed" />
                <h4>Watching</h4>
                <span class="description">You receive notifications for all conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-eye-unwatch"></span>
                  Unwatch
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

            <div class="select-menu-item js-navigation-item " role="menuitem" tabindex="0">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <div class="select-menu-item-text">
                <input id="do_ignore" name="do" type="radio" value="ignore" />
                <h4>Ignoring</h4>
                <span class="description">You do not receive any notifications for conversations in this repository.</span>
                <span class="js-select-button-text hidden-select-button-text">
                  <span class="octicon octicon-mute"></span>
                  Stop ignoring
                </span>
              </div>
            </div> <!-- /.select-menu-item -->

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

</form>
    </li>

  <li>
  

  <div class="js-toggler-container js-social-container starring-container ">
    <a href="/PHPMailer/PHPMailer/unstar"
      class="minibutton with-count js-toggler-target star-button starred"
      aria-label="Unstar this repository" title="Unstar PHPMailer/PHPMailer" data-remote="true" data-method="post" rel="nofollow">
      <span class="octicon octicon-star-delete"></span><span class="text">Unstar</span>
    </a>

    <a href="/PHPMailer/PHPMailer/star"
      class="minibutton with-count js-toggler-target star-button unstarred"
      aria-label="Star this repository" title="Star PHPMailer/PHPMailer" data-remote="true" data-method="post" rel="nofollow">
      <span class="octicon octicon-star"></span><span class="text">Star</span>
    </a>

      <a class="social-count js-social-count" href="/PHPMailer/PHPMailer/stargazers">
        1,484
      </a>
  </div>

  </li>


        <li>
          <a href="/PHPMailer/PHPMailer/fork" class="minibutton with-count js-toggler-target fork-button lighter tooltipped-n" title="Fork your own copy of PHPMailer/PHPMailer to your account" aria-label="Fork your own copy of PHPMailer/PHPMailer to your account" rel="nofollow" data-method="post">
            <span class="octicon octicon-git-branch-create"></span><span class="text">Fork</span>
          </a>
          <a href="/PHPMailer/PHPMailer/network" class="social-count">1,167</a>
        </li>


</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/PHPMailer" class="url fn" itemprop="url" rel="author"><span itemprop="title">PHPMailer</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/PHPMailer/PHPMailer" class="js-current-repository js-repo-home-link">PHPMailer</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/PHPMailer/PHPMailer" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /PHPMailer/PHPMailer">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/PHPMailer/PHPMailer/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /PHPMailer/PHPMailer/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>24</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/PHPMailer/PHPMailer/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /PHPMailer/PHPMailer/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>4</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


        <li class="tooltipped tooltipped-w" aria-label="Wiki">
          <a href="/PHPMailer/PHPMailer/wiki" aria-label="Wiki" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_wiki /PHPMailer/PHPMailer/wiki">
            <span class="octicon octicon-book"></span> <span class="full-word">Wiki</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>
    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/PHPMailer/PHPMailer/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /PHPMailer/PHPMailer/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/PHPMailer/PHPMailer/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /PHPMailer/PHPMailer/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/PHPMailer/PHPMailer/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /PHPMailer/PHPMailer/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/PHPMailer/PHPMailer.git" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/PHPMailer/PHPMailer.git" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="ssh"
  data-url="/users/set_protocol?protocol_selector=ssh&amp;protocol_type=clone">
  <h3><strong>SSH</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="git@github.com:PHPMailer/PHPMailer.git" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="git@github.com:PHPMailer/PHPMailer.git" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/PHPMailer/PHPMailer" readonly="readonly">

    <span aria-label="copy to clipboard" class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/PHPMailer/PHPMailer" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      <a href="#" class="js-clone-selector" data-protocol="ssh">SSH</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>


  <a href="github-windows://openRepo/https://github.com/PHPMailer/PHPMailer" class="minibutton sidebar-button" title="Save PHPMailer/PHPMailer to your computer and use it in GitHub Desktop." aria-label="Save PHPMailer/PHPMailer to your computer and use it in GitHub Desktop.">
    <span class="octicon octicon-device-desktop"></span>
    Clone in Desktop
  </a>

                <a href="/PHPMailer/PHPMailer/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download PHPMailer/PHPMailer as a zip file"
                   title="Download PHPMailer/PHPMailer as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:671214b98f8489a47dc779ee1051a368 -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/PHPMailer/PHPMailer/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/5.0-dev/class.smtp.php"
                 data-name="5.0-dev"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="5.0-dev">5.0-dev</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/5.0-phpdocs/class.smtp.php"
                 data-name="5.0-phpdocs"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="5.0-phpdocs">5.0-phpdocs</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/gh-pages/class.smtp.php"
                 data-name="gh-pages"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="gh-pages">gh-pages</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/master/class.smtp.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/phpmailer-2.0/class.smtp.php"
                 data-name="phpmailer-2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.0">phpmailer-2.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/phpmailer-2.3.0-msg-limit-patch/class.smtp.php"
                 data-name="phpmailer-2.3.0-msg-limit-patch"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.3.0-msg-limit-patch">phpmailer-2.3.0-msg-limit-patch</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/phpmailer-5.2.0/class.smtp.php"
                 data-name="phpmailer-5.2.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-5.2.0">phpmailer-5.2.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/qmail/class.smtp.php"
                 data-name="qmail"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="qmail">qmail</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/smtp-refactor/class.smtp.php"
                 data-name="smtp-refactor"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="smtp-refactor">smtp-refactor</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/blob/vendor/class.smtp.php"
                 data-name="vendor"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="vendor">vendor</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/v5.2.7/class.smtp.php"
                 data-name="v5.2.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.2.7">v5.2.7</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/v5.2.6/class.smtp.php"
                 data-name="v5.2.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.2.6">v5.2.6</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/v5.2.5/class.smtp.php"
                 data-name="v5.2.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.2.5">v5.2.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/v5.1.0/class.smtp.php"
                 data-name="v5.1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.1.0">v5.1.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/v5.0.2/class.smtp.php"
                 data-name="v5.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.0.2">v5.0.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/v5.0.0/class.smtp.php"
                 data-name="v5.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v5.0.0">v5.0.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/v2.3.0/class.smtp.php"
                 data-name="v2.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.3.0">v2.3.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/v2.0.3/class.smtp.php"
                 data-name="v2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v2.0.3">v2.0.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/phpmailer-5.1/class.smtp.php"
                 data-name="phpmailer-5.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-5.1">phpmailer-5.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/phpmailer-5.0.2/class.smtp.php"
                 data-name="phpmailer-5.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-5.0.2">phpmailer-5.0.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/phpmailer-5.0.0/class.smtp.php"
                 data-name="phpmailer-5.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-5.0.0">phpmailer-5.0.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/phpmailer-2.3.0%40186/class.smtp.php"
                 data-name="phpmailer-2.3.0@186"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.3.0@186">phpmailer-2.3.0@186</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/phpmailer-2.3.0/class.smtp.php"
                 data-name="phpmailer-2.3.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.3.0">phpmailer-2.3.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/PHPMailer/PHPMailer/tree/phpmailer-2.0.3/class.smtp.php"
                 data-name="phpmailer-2.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="phpmailer-2.0.3">phpmailer-2.0.3</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/PHPMailer/PHPMailer" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">PHPMailer</span></a></span></span><span class="separator"> / </span><strong class="final-path">class.smtp.php</strong> <span aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="class.smtp.php" data-copied-hint="copied!"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="Marcus Bointon" class="main-avatar js-avatar" data-user="81561" height="24" src="https://1.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?d=https%3A%2F%2Fidenticons.github.com%2F7027326ded5389637d4996fa98d7091b.png&amp;r=x&amp;s=140" width="24" />
    <span class="author"><a href="/Synchro" rel="author">Synchro</a></span>
    <time class="js-relative-date" data-title-format="YYYY-MM-DD HH:mm:ss" datetime="2014-03-03T10:58:49-08:00" title="2014-03-03 21:58:49">March 03, 2014</time>
    <div class="commit-title">
        <a href="/PHPMailer/PHPMailer/commit/3879e2700336c05aa308335c58a362ad2c5509a7" class="message" data-pjax="true" title="Small simplification">Small simplification</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>4</strong> contributors</a></p>
          <a class="avatar tooltipped tooltipped-s" aria-label="Synchro" href="/PHPMailer/PHPMailer/commits/master/class.smtp.php?author=Synchro"><img alt="Marcus Bointon" class=" js-avatar" data-user="81561" height="20" src="https://1.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?d=https%3A%2F%2Fidenticons.github.com%2F7027326ded5389637d4996fa98d7091b.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="vlajos" href="/PHPMailer/PHPMailer/commits/master/class.smtp.php?author=vlajos"><img alt="Veres Lajos" class=" js-avatar" data-user="3994645" height="20" src="https://1.gravatar.com/avatar/97641352cacca84166f35e74173a1a5f?d=https%3A%2F%2Fidenticons.github.com%2F746b03825724f1fe959678eb4d24872d.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="okonomiyaki3000" href="/PHPMailer/PHPMailer/commits/master/class.smtp.php?author=okonomiyaki3000"><img alt="Elijah Madden" class=" js-avatar" data-user="79470" height="20" src="https://2.gravatar.com/avatar/ba0e6d739e834c89625f71055305253a?d=https%3A%2F%2Fidenticons.github.com%2F42ada70d4f61c1dda184330e1cda4f0f.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped tooltipped-s" aria-label="jimjag" href="/PHPMailer/PHPMailer/commits/master/class.smtp.php?author=jimjag"><img alt="Jim Jagielski" class=" js-avatar" data-user="84076" height="20" src="https://1.gravatar.com/avatar/a86203bd1e538f2a4e58eb8850fb66ef?d=https%3A%2F%2Fidenticons.github.com%2Fb4f6e40b53667c935bf2fd683fbf62e8.png&amp;r=x&amp;s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Marcus Bointon" class=" js-avatar" data-user="81561" height="24" src="https://1.gravatar.com/avatar/b4814d6790e91f01c77cac9d25db12b6?d=https%3A%2F%2Fidenticons.github.com%2F7027326ded5389637d4996fa98d7091b.png&amp;r=x&amp;s=140" width="24" />
            <a href="/Synchro">Synchro</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Veres Lajos" class=" js-avatar" data-user="3994645" height="24" src="https://1.gravatar.com/avatar/97641352cacca84166f35e74173a1a5f?d=https%3A%2F%2Fidenticons.github.com%2F746b03825724f1fe959678eb4d24872d.png&amp;r=x&amp;s=140" width="24" />
            <a href="/vlajos">vlajos</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Elijah Madden" class=" js-avatar" data-user="79470" height="24" src="https://2.gravatar.com/avatar/ba0e6d739e834c89625f71055305253a?d=https%3A%2F%2Fidenticons.github.com%2F42ada70d4f61c1dda184330e1cda4f0f.png&amp;r=x&amp;s=140" width="24" />
            <a href="/okonomiyaki3000">okonomiyaki3000</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Jim Jagielski" class=" js-avatar" data-user="84076" height="24" src="https://1.gravatar.com/avatar/a86203bd1e538f2a4e58eb8850fb66ef?d=https%3A%2F%2Fidenticons.github.com%2Fb4f6e40b53667c935bf2fd683fbf62e8.png&amp;r=x&amp;s=140" width="24" />
            <a href="/jimjag">jimjag</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>933 lines (865 sloc)</span>
          <span class="meta-divider"></span>
        <span>29.074 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
            <a class="minibutton tooltipped tooltipped-w"
               href="github-windows://openRepo/https://github.com/PHPMailer/PHPMailer?branch=master&amp;filepath=class.smtp.php" aria-label="Open this file in GitHub for Windows">
                <span class="octicon octicon-device-desktop"></span> Open
            </a>
                <a class="minibutton tooltipped tooltipped-n js-update-url-with-hash"
                   aria-label="Clicking this button will automatically fork this project so you can edit the file"
                   href="/PHPMailer/PHPMailer/edit/master/class.smtp.php"
                   data-method="post" rel="nofollow">Edit</a>
          <a href="/PHPMailer/PHPMailer/raw/master/class.smtp.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/PHPMailer/PHPMailer/blame/master/class.smtp.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/PHPMailer/PHPMailer/commits/master/class.smtp.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->

            <a class="minibutton danger empty-icon tooltipped tooltipped-s"
               href="/PHPMailer/PHPMailer/delete/master/class.smtp.php"
               aria-label="Fork this project and delete file"
               data-method="post" data-test-id="delete-blob-file" rel="nofollow">

          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>
<span id="L614" rel="#L614">614</span>
<span id="L615" rel="#L615">615</span>
<span id="L616" rel="#L616">616</span>
<span id="L617" rel="#L617">617</span>
<span id="L618" rel="#L618">618</span>
<span id="L619" rel="#L619">619</span>
<span id="L620" rel="#L620">620</span>
<span id="L621" rel="#L621">621</span>
<span id="L622" rel="#L622">622</span>
<span id="L623" rel="#L623">623</span>
<span id="L624" rel="#L624">624</span>
<span id="L625" rel="#L625">625</span>
<span id="L626" rel="#L626">626</span>
<span id="L627" rel="#L627">627</span>
<span id="L628" rel="#L628">628</span>
<span id="L629" rel="#L629">629</span>
<span id="L630" rel="#L630">630</span>
<span id="L631" rel="#L631">631</span>
<span id="L632" rel="#L632">632</span>
<span id="L633" rel="#L633">633</span>
<span id="L634" rel="#L634">634</span>
<span id="L635" rel="#L635">635</span>
<span id="L636" rel="#L636">636</span>
<span id="L637" rel="#L637">637</span>
<span id="L638" rel="#L638">638</span>
<span id="L639" rel="#L639">639</span>
<span id="L640" rel="#L640">640</span>
<span id="L641" rel="#L641">641</span>
<span id="L642" rel="#L642">642</span>
<span id="L643" rel="#L643">643</span>
<span id="L644" rel="#L644">644</span>
<span id="L645" rel="#L645">645</span>
<span id="L646" rel="#L646">646</span>
<span id="L647" rel="#L647">647</span>
<span id="L648" rel="#L648">648</span>
<span id="L649" rel="#L649">649</span>
<span id="L650" rel="#L650">650</span>
<span id="L651" rel="#L651">651</span>
<span id="L652" rel="#L652">652</span>
<span id="L653" rel="#L653">653</span>
<span id="L654" rel="#L654">654</span>
<span id="L655" rel="#L655">655</span>
<span id="L656" rel="#L656">656</span>
<span id="L657" rel="#L657">657</span>
<span id="L658" rel="#L658">658</span>
<span id="L659" rel="#L659">659</span>
<span id="L660" rel="#L660">660</span>
<span id="L661" rel="#L661">661</span>
<span id="L662" rel="#L662">662</span>
<span id="L663" rel="#L663">663</span>
<span id="L664" rel="#L664">664</span>
<span id="L665" rel="#L665">665</span>
<span id="L666" rel="#L666">666</span>
<span id="L667" rel="#L667">667</span>
<span id="L668" rel="#L668">668</span>
<span id="L669" rel="#L669">669</span>
<span id="L670" rel="#L670">670</span>
<span id="L671" rel="#L671">671</span>
<span id="L672" rel="#L672">672</span>
<span id="L673" rel="#L673">673</span>
<span id="L674" rel="#L674">674</span>
<span id="L675" rel="#L675">675</span>
<span id="L676" rel="#L676">676</span>
<span id="L677" rel="#L677">677</span>
<span id="L678" rel="#L678">678</span>
<span id="L679" rel="#L679">679</span>
<span id="L680" rel="#L680">680</span>
<span id="L681" rel="#L681">681</span>
<span id="L682" rel="#L682">682</span>
<span id="L683" rel="#L683">683</span>
<span id="L684" rel="#L684">684</span>
<span id="L685" rel="#L685">685</span>
<span id="L686" rel="#L686">686</span>
<span id="L687" rel="#L687">687</span>
<span id="L688" rel="#L688">688</span>
<span id="L689" rel="#L689">689</span>
<span id="L690" rel="#L690">690</span>
<span id="L691" rel="#L691">691</span>
<span id="L692" rel="#L692">692</span>
<span id="L693" rel="#L693">693</span>
<span id="L694" rel="#L694">694</span>
<span id="L695" rel="#L695">695</span>
<span id="L696" rel="#L696">696</span>
<span id="L697" rel="#L697">697</span>
<span id="L698" rel="#L698">698</span>
<span id="L699" rel="#L699">699</span>
<span id="L700" rel="#L700">700</span>
<span id="L701" rel="#L701">701</span>
<span id="L702" rel="#L702">702</span>
<span id="L703" rel="#L703">703</span>
<span id="L704" rel="#L704">704</span>
<span id="L705" rel="#L705">705</span>
<span id="L706" rel="#L706">706</span>
<span id="L707" rel="#L707">707</span>
<span id="L708" rel="#L708">708</span>
<span id="L709" rel="#L709">709</span>
<span id="L710" rel="#L710">710</span>
<span id="L711" rel="#L711">711</span>
<span id="L712" rel="#L712">712</span>
<span id="L713" rel="#L713">713</span>
<span id="L714" rel="#L714">714</span>
<span id="L715" rel="#L715">715</span>
<span id="L716" rel="#L716">716</span>
<span id="L717" rel="#L717">717</span>
<span id="L718" rel="#L718">718</span>
<span id="L719" rel="#L719">719</span>
<span id="L720" rel="#L720">720</span>
<span id="L721" rel="#L721">721</span>
<span id="L722" rel="#L722">722</span>
<span id="L723" rel="#L723">723</span>
<span id="L724" rel="#L724">724</span>
<span id="L725" rel="#L725">725</span>
<span id="L726" rel="#L726">726</span>
<span id="L727" rel="#L727">727</span>
<span id="L728" rel="#L728">728</span>
<span id="L729" rel="#L729">729</span>
<span id="L730" rel="#L730">730</span>
<span id="L731" rel="#L731">731</span>
<span id="L732" rel="#L732">732</span>
<span id="L733" rel="#L733">733</span>
<span id="L734" rel="#L734">734</span>
<span id="L735" rel="#L735">735</span>
<span id="L736" rel="#L736">736</span>
<span id="L737" rel="#L737">737</span>
<span id="L738" rel="#L738">738</span>
<span id="L739" rel="#L739">739</span>
<span id="L740" rel="#L740">740</span>
<span id="L741" rel="#L741">741</span>
<span id="L742" rel="#L742">742</span>
<span id="L743" rel="#L743">743</span>
<span id="L744" rel="#L744">744</span>
<span id="L745" rel="#L745">745</span>
<span id="L746" rel="#L746">746</span>
<span id="L747" rel="#L747">747</span>
<span id="L748" rel="#L748">748</span>
<span id="L749" rel="#L749">749</span>
<span id="L750" rel="#L750">750</span>
<span id="L751" rel="#L751">751</span>
<span id="L752" rel="#L752">752</span>
<span id="L753" rel="#L753">753</span>
<span id="L754" rel="#L754">754</span>
<span id="L755" rel="#L755">755</span>
<span id="L756" rel="#L756">756</span>
<span id="L757" rel="#L757">757</span>
<span id="L758" rel="#L758">758</span>
<span id="L759" rel="#L759">759</span>
<span id="L760" rel="#L760">760</span>
<span id="L761" rel="#L761">761</span>
<span id="L762" rel="#L762">762</span>
<span id="L763" rel="#L763">763</span>
<span id="L764" rel="#L764">764</span>
<span id="L765" rel="#L765">765</span>
<span id="L766" rel="#L766">766</span>
<span id="L767" rel="#L767">767</span>
<span id="L768" rel="#L768">768</span>
<span id="L769" rel="#L769">769</span>
<span id="L770" rel="#L770">770</span>
<span id="L771" rel="#L771">771</span>
<span id="L772" rel="#L772">772</span>
<span id="L773" rel="#L773">773</span>
<span id="L774" rel="#L774">774</span>
<span id="L775" rel="#L775">775</span>
<span id="L776" rel="#L776">776</span>
<span id="L777" rel="#L777">777</span>
<span id="L778" rel="#L778">778</span>
<span id="L779" rel="#L779">779</span>
<span id="L780" rel="#L780">780</span>
<span id="L781" rel="#L781">781</span>
<span id="L782" rel="#L782">782</span>
<span id="L783" rel="#L783">783</span>
<span id="L784" rel="#L784">784</span>
<span id="L785" rel="#L785">785</span>
<span id="L786" rel="#L786">786</span>
<span id="L787" rel="#L787">787</span>
<span id="L788" rel="#L788">788</span>
<span id="L789" rel="#L789">789</span>
<span id="L790" rel="#L790">790</span>
<span id="L791" rel="#L791">791</span>
<span id="L792" rel="#L792">792</span>
<span id="L793" rel="#L793">793</span>
<span id="L794" rel="#L794">794</span>
<span id="L795" rel="#L795">795</span>
<span id="L796" rel="#L796">796</span>
<span id="L797" rel="#L797">797</span>
<span id="L798" rel="#L798">798</span>
<span id="L799" rel="#L799">799</span>
<span id="L800" rel="#L800">800</span>
<span id="L801" rel="#L801">801</span>
<span id="L802" rel="#L802">802</span>
<span id="L803" rel="#L803">803</span>
<span id="L804" rel="#L804">804</span>
<span id="L805" rel="#L805">805</span>
<span id="L806" rel="#L806">806</span>
<span id="L807" rel="#L807">807</span>
<span id="L808" rel="#L808">808</span>
<span id="L809" rel="#L809">809</span>
<span id="L810" rel="#L810">810</span>
<span id="L811" rel="#L811">811</span>
<span id="L812" rel="#L812">812</span>
<span id="L813" rel="#L813">813</span>
<span id="L814" rel="#L814">814</span>
<span id="L815" rel="#L815">815</span>
<span id="L816" rel="#L816">816</span>
<span id="L817" rel="#L817">817</span>
<span id="L818" rel="#L818">818</span>
<span id="L819" rel="#L819">819</span>
<span id="L820" rel="#L820">820</span>
<span id="L821" rel="#L821">821</span>
<span id="L822" rel="#L822">822</span>
<span id="L823" rel="#L823">823</span>
<span id="L824" rel="#L824">824</span>
<span id="L825" rel="#L825">825</span>
<span id="L826" rel="#L826">826</span>
<span id="L827" rel="#L827">827</span>
<span id="L828" rel="#L828">828</span>
<span id="L829" rel="#L829">829</span>
<span id="L830" rel="#L830">830</span>
<span id="L831" rel="#L831">831</span>
<span id="L832" rel="#L832">832</span>
<span id="L833" rel="#L833">833</span>
<span id="L834" rel="#L834">834</span>
<span id="L835" rel="#L835">835</span>
<span id="L836" rel="#L836">836</span>
<span id="L837" rel="#L837">837</span>
<span id="L838" rel="#L838">838</span>
<span id="L839" rel="#L839">839</span>
<span id="L840" rel="#L840">840</span>
<span id="L841" rel="#L841">841</span>
<span id="L842" rel="#L842">842</span>
<span id="L843" rel="#L843">843</span>
<span id="L844" rel="#L844">844</span>
<span id="L845" rel="#L845">845</span>
<span id="L846" rel="#L846">846</span>
<span id="L847" rel="#L847">847</span>
<span id="L848" rel="#L848">848</span>
<span id="L849" rel="#L849">849</span>
<span id="L850" rel="#L850">850</span>
<span id="L851" rel="#L851">851</span>
<span id="L852" rel="#L852">852</span>
<span id="L853" rel="#L853">853</span>
<span id="L854" rel="#L854">854</span>
<span id="L855" rel="#L855">855</span>
<span id="L856" rel="#L856">856</span>
<span id="L857" rel="#L857">857</span>
<span id="L858" rel="#L858">858</span>
<span id="L859" rel="#L859">859</span>
<span id="L860" rel="#L860">860</span>
<span id="L861" rel="#L861">861</span>
<span id="L862" rel="#L862">862</span>
<span id="L863" rel="#L863">863</span>
<span id="L864" rel="#L864">864</span>
<span id="L865" rel="#L865">865</span>
<span id="L866" rel="#L866">866</span>
<span id="L867" rel="#L867">867</span>
<span id="L868" rel="#L868">868</span>
<span id="L869" rel="#L869">869</span>
<span id="L870" rel="#L870">870</span>
<span id="L871" rel="#L871">871</span>
<span id="L872" rel="#L872">872</span>
<span id="L873" rel="#L873">873</span>
<span id="L874" rel="#L874">874</span>
<span id="L875" rel="#L875">875</span>
<span id="L876" rel="#L876">876</span>
<span id="L877" rel="#L877">877</span>
<span id="L878" rel="#L878">878</span>
<span id="L879" rel="#L879">879</span>
<span id="L880" rel="#L880">880</span>
<span id="L881" rel="#L881">881</span>
<span id="L882" rel="#L882">882</span>
<span id="L883" rel="#L883">883</span>
<span id="L884" rel="#L884">884</span>
<span id="L885" rel="#L885">885</span>
<span id="L886" rel="#L886">886</span>
<span id="L887" rel="#L887">887</span>
<span id="L888" rel="#L888">888</span>
<span id="L889" rel="#L889">889</span>
<span id="L890" rel="#L890">890</span>
<span id="L891" rel="#L891">891</span>
<span id="L892" rel="#L892">892</span>
<span id="L893" rel="#L893">893</span>
<span id="L894" rel="#L894">894</span>
<span id="L895" rel="#L895">895</span>
<span id="L896" rel="#L896">896</span>
<span id="L897" rel="#L897">897</span>
<span id="L898" rel="#L898">898</span>
<span id="L899" rel="#L899">899</span>
<span id="L900" rel="#L900">900</span>
<span id="L901" rel="#L901">901</span>
<span id="L902" rel="#L902">902</span>
<span id="L903" rel="#L903">903</span>
<span id="L904" rel="#L904">904</span>
<span id="L905" rel="#L905">905</span>
<span id="L906" rel="#L906">906</span>
<span id="L907" rel="#L907">907</span>
<span id="L908" rel="#L908">908</span>
<span id="L909" rel="#L909">909</span>
<span id="L910" rel="#L910">910</span>
<span id="L911" rel="#L911">911</span>
<span id="L912" rel="#L912">912</span>
<span id="L913" rel="#L913">913</span>
<span id="L914" rel="#L914">914</span>
<span id="L915" rel="#L915">915</span>
<span id="L916" rel="#L916">916</span>
<span id="L917" rel="#L917">917</span>
<span id="L918" rel="#L918">918</span>
<span id="L919" rel="#L919">919</span>
<span id="L920" rel="#L920">920</span>
<span id="L921" rel="#L921">921</span>
<span id="L922" rel="#L922">922</span>
<span id="L923" rel="#L923">923</span>
<span id="L924" rel="#L924">924</span>
<span id="L925" rel="#L925">925</span>
<span id="L926" rel="#L926">926</span>
<span id="L927" rel="#L927">927</span>
<span id="L928" rel="#L928">928</span>
<span id="L929" rel="#L929">929</span>
<span id="L930" rel="#L930">930</span>
<span id="L931" rel="#L931">931</span>
<span id="L932" rel="#L932">932</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * PHPMailer RFC821 SMTP email transport class.</span></div><div class='line' id='LC4'><span class="sd"> * Version 5.2.7</span></div><div class='line' id='LC5'><span class="sd"> * PHP version 5.0.0</span></div><div class='line' id='LC6'><span class="sd"> * @category  PHP</span></div><div class='line' id='LC7'><span class="sd"> * @package   PHPMailer</span></div><div class='line' id='LC8'><span class="sd"> * @link      https://github.com/PHPMailer/PHPMailer/</span></div><div class='line' id='LC9'><span class="sd"> * @author Marcus Bointon (coolbru) &lt;phpmailer@synchromedia.co.uk&gt;</span></div><div class='line' id='LC10'><span class="sd"> * @author Jim Jagielski (jimjag) &lt;jimjag@gmail.com&gt;</span></div><div class='line' id='LC11'><span class="sd"> * @author Andy Prevost (codeworxtech) &lt;codeworxtech@users.sourceforge.net&gt;</span></div><div class='line' id='LC12'><span class="sd"> * @copyright 2013 Marcus Bointon</span></div><div class='line' id='LC13'><span class="sd"> * @copyright 2004 - 2008 Andy Prevost</span></div><div class='line' id='LC14'><span class="sd"> * @copyright 2010 - 2012 Jim Jagielski</span></div><div class='line' id='LC15'><span class="sd"> * @license   http://www.gnu.org/copyleft/lesser.html Distributed under the Lesser General Public License (LGPL)</span></div><div class='line' id='LC16'><span class="sd"> */</span></div><div class='line' id='LC17'><br/></div><div class='line' id='LC18'><span class="sd">/**</span></div><div class='line' id='LC19'><span class="sd"> * PHPMailer RFC821 SMTP email transport class.</span></div><div class='line' id='LC20'><span class="sd"> *</span></div><div class='line' id='LC21'><span class="sd"> * Implements RFC 821 SMTP commands</span></div><div class='line' id='LC22'><span class="sd"> * and provides some utility methods for sending mail to an SMTP server.</span></div><div class='line' id='LC23'><span class="sd"> *</span></div><div class='line' id='LC24'><span class="sd"> * PHP Version 5.0.0</span></div><div class='line' id='LC25'><span class="sd"> *</span></div><div class='line' id='LC26'><span class="sd"> * @category PHP</span></div><div class='line' id='LC27'><span class="sd"> * @package  PHPMailer</span></div><div class='line' id='LC28'><span class="sd"> * @link     https://github.com/PHPMailer/PHPMailer/blob/master/class.smtp.php</span></div><div class='line' id='LC29'><span class="sd"> * @author   Chris Ryan &lt;unknown@example.com&gt;</span></div><div class='line' id='LC30'><span class="sd"> * @author   Marcus Bointon &lt;phpmailer@synchromedia.co.uk&gt;</span></div><div class='line' id='LC31'><span class="sd"> * @license  http://www.gnu.org/copyleft/lesser.html Distributed under the Lesser General Public License (LGPL)</span></div><div class='line' id='LC32'><span class="sd"> */</span></div><div class='line' id='LC33'><br/></div><div class='line' id='LC34'><span class="k">class</span> <span class="nc">SMTP</span></div><div class='line' id='LC35'><span class="p">{</span></div><div class='line' id='LC36'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC37'><span class="sd">     * The PHPMailer SMTP Version number.</span></div><div class='line' id='LC38'><span class="sd">     */</span></div><div class='line' id='LC39'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">VERSION</span> <span class="o">=</span> <span class="s1">&#39;5.2.7&#39;</span><span class="p">;</span></div><div class='line' id='LC40'><br/></div><div class='line' id='LC41'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC42'><span class="sd">     * SMTP line break constant.</span></div><div class='line' id='LC43'><span class="sd">     */</span></div><div class='line' id='LC44'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">CRLF</span> <span class="o">=</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC45'><br/></div><div class='line' id='LC46'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC47'><span class="sd">     * The SMTP port to use if one is not specified.</span></div><div class='line' id='LC48'><span class="sd">     */</span></div><div class='line' id='LC49'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">DEFAULT_SMTP_PORT</span> <span class="o">=</span> <span class="mi">25</span><span class="p">;</span></div><div class='line' id='LC50'><br/></div><div class='line' id='LC51'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC52'><span class="sd">     * The maximum line length allowed by RFC 2822 section 2.1.1</span></div><div class='line' id='LC53'><span class="sd">     */</span></div><div class='line' id='LC54'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">MAX_LINE_LENGTH</span> <span class="o">=</span> <span class="mi">998</span><span class="p">;</span></div><div class='line' id='LC55'><br/></div><div class='line' id='LC56'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC57'><span class="sd">     * The PHPMailer SMTP Version number.</span></div><div class='line' id='LC58'><span class="sd">     * @type string</span></div><div class='line' id='LC59'><span class="sd">     * @deprecated This should be a constant</span></div><div class='line' id='LC60'><span class="sd">     * @see SMTP::VERSION</span></div><div class='line' id='LC61'><span class="sd">     */</span></div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Version</span> <span class="o">=</span> <span class="s1">&#39;5.2.7&#39;</span><span class="p">;</span></div><div class='line' id='LC63'><br/></div><div class='line' id='LC64'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC65'><span class="sd">     * SMTP server port number.</span></div><div class='line' id='LC66'><span class="sd">     * @type int</span></div><div class='line' id='LC67'><span class="sd">     * @deprecated This is only ever ued as default value, so should be a constant</span></div><div class='line' id='LC68'><span class="sd">     * @see SMTP::DEFAULT_SMTP_PORT</span></div><div class='line' id='LC69'><span class="sd">     */</span></div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$SMTP_PORT</span> <span class="o">=</span> <span class="mi">25</span><span class="p">;</span></div><div class='line' id='LC71'><br/></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC73'><span class="sd">     * SMTP reply line ending</span></div><div class='line' id='LC74'><span class="sd">     * @type string</span></div><div class='line' id='LC75'><span class="sd">     * @deprecated Use the class constant instead</span></div><div class='line' id='LC76'><span class="sd">     * @see SMTP::CRLF</span></div><div class='line' id='LC77'><span class="sd">     */</span></div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$CRLF</span> <span class="o">=</span> <span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC79'><br/></div><div class='line' id='LC80'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC81'><span class="sd">     * Debug output level.</span></div><div class='line' id='LC82'><span class="sd">     * Options:</span></div><div class='line' id='LC83'><span class="sd">     *   0: no output</span></div><div class='line' id='LC84'><span class="sd">     *   1: commands</span></div><div class='line' id='LC85'><span class="sd">     *   2: data and commands</span></div><div class='line' id='LC86'><span class="sd">     *   3: as 2 plus connection status</span></div><div class='line' id='LC87'><span class="sd">     *   4: low level data output</span></div><div class='line' id='LC88'><span class="sd">     * @type int</span></div><div class='line' id='LC89'><span class="sd">     */</span></div><div class='line' id='LC90'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$do_debug</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC91'><br/></div><div class='line' id='LC92'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC93'><span class="sd">     * The function/method to use for debugging output.</span></div><div class='line' id='LC94'><span class="sd">     * Options: &#39;echo&#39;, &#39;html&#39; or &#39;error_log&#39;</span></div><div class='line' id='LC95'><span class="sd">     * @type string</span></div><div class='line' id='LC96'><span class="sd">     */</span></div><div class='line' id='LC97'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Debugoutput</span> <span class="o">=</span> <span class="s1">&#39;echo&#39;</span><span class="p">;</span></div><div class='line' id='LC98'><br/></div><div class='line' id='LC99'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC100'><span class="sd">     * Whether to use VERP.</span></div><div class='line' id='LC101'><span class="sd">     * @type bool</span></div><div class='line' id='LC102'><span class="sd">     */</span></div><div class='line' id='LC103'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$do_verp</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC104'><br/></div><div class='line' id='LC105'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC106'><span class="sd">     * The timeout value for connection, in seconds.</span></div><div class='line' id='LC107'><span class="sd">     * Default of 5 minutes (300sec) is from RFC2821 section 4.5.3.2</span></div><div class='line' id='LC108'><span class="sd">     * @type int</span></div><div class='line' id='LC109'><span class="sd">     */</span></div><div class='line' id='LC110'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Timeout</span> <span class="o">=</span> <span class="mi">300</span><span class="p">;</span></div><div class='line' id='LC111'><br/></div><div class='line' id='LC112'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC113'><span class="sd">     * The SMTP timelimit value for reads, in seconds.</span></div><div class='line' id='LC114'><span class="sd">     * @type int</span></div><div class='line' id='LC115'><span class="sd">     */</span></div><div class='line' id='LC116'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$Timelimit</span> <span class="o">=</span> <span class="mi">30</span><span class="p">;</span></div><div class='line' id='LC117'><br/></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC119'><span class="sd">     * The socket for the server connection.</span></div><div class='line' id='LC120'><span class="sd">     * @type resource</span></div><div class='line' id='LC121'><span class="sd">     */</span></div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$smtp_conn</span><span class="p">;</span></div><div class='line' id='LC123'><br/></div><div class='line' id='LC124'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC125'><span class="sd">     * Error message, if any, for the last call.</span></div><div class='line' id='LC126'><span class="sd">     * @type string</span></div><div class='line' id='LC127'><span class="sd">     */</span></div><div class='line' id='LC128'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$error</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC129'><br/></div><div class='line' id='LC130'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC131'><span class="sd">     * The reply the server sent to us for HELO.</span></div><div class='line' id='LC132'><span class="sd">     * @type string</span></div><div class='line' id='LC133'><span class="sd">     */</span></div><div class='line' id='LC134'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$helo_rply</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC135'><br/></div><div class='line' id='LC136'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC137'><span class="sd">     * The most recent reply received from the server.</span></div><div class='line' id='LC138'><span class="sd">     * @type string</span></div><div class='line' id='LC139'><span class="sd">     */</span></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="nv">$last_reply</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC141'><br/></div><div class='line' id='LC142'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC143'><span class="sd">     * Constructor.</span></div><div class='line' id='LC144'><span class="sd">     * @access public</span></div><div class='line' id='LC145'><span class="sd">     */</span></div><div class='line' id='LC146'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">()</span></div><div class='line' id='LC147'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC148'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC150'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">helo_rply</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC151'><br/></div><div class='line' id='LC152'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC153'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC154'><br/></div><div class='line' id='LC155'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC156'><span class="sd">     * Output debugging info via a user-selected method.</span></div><div class='line' id='LC157'><span class="sd">     * @param string $str Debug string to output</span></div><div class='line' id='LC158'><span class="sd">     * @return void</span></div><div class='line' id='LC159'><span class="sd">     */</span></div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">edebug</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span></div><div class='line' id='LC161'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC162'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Debugoutput</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC163'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;error_log&#39;</span><span class="o">:</span></div><div class='line' id='LC164'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Don&#39;t output, just log</span></div><div class='line' id='LC165'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">error_log</span><span class="p">(</span><span class="nv">$str</span><span class="p">);</span></div><div class='line' id='LC166'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC167'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;html&#39;</span><span class="o">:</span></div><div class='line' id='LC168'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Cleans up output a bit for a better looking, HTML-safe output</span></div><div class='line' id='LC169'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="nb">htmlentities</span><span class="p">(</span></div><div class='line' id='LC170'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/[\r\n]+/&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$str</span><span class="p">),</span></div><div class='line' id='LC171'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">ENT_QUOTES</span><span class="p">,</span></div><div class='line' id='LC172'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;UTF-8&#39;</span></div><div class='line' id='LC173'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span> <span class="s2">&quot;&lt;br&gt;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC175'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC176'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;echo&#39;</span><span class="o">:</span></div><div class='line' id='LC177'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">default</span><span class="o">:</span></div><div class='line' id='LC178'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">echo</span> <span class="nb">gmdate</span><span class="p">(</span><span class="s1">&#39;Y-m-d H:i:s&#39;</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\t</span><span class="s2">&quot;</span><span class="o">.</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$str</span><span class="p">)</span><span class="o">.</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">;</span></div><div class='line' id='LC179'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC180'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC181'><br/></div><div class='line' id='LC182'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC183'><span class="sd">     * Connect to an SMTP server.</span></div><div class='line' id='LC184'><span class="sd">     * @param string $host    SMTP server IP or host name</span></div><div class='line' id='LC185'><span class="sd">     * @param int $port    The port number to connect to</span></div><div class='line' id='LC186'><span class="sd">     * @param int $timeout How long to wait for the connection to open</span></div><div class='line' id='LC187'><span class="sd">     * @param array $options An array of options for stream_context_create()</span></div><div class='line' id='LC188'><span class="sd">     * @access public</span></div><div class='line' id='LC189'><span class="sd">     * @return bool</span></div><div class='line' id='LC190'><span class="sd">     */</span></div><div class='line' id='LC191'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">connect</span><span class="p">(</span><span class="nv">$host</span><span class="p">,</span> <span class="nv">$port</span> <span class="o">=</span> <span class="k">null</span><span class="p">,</span> <span class="nv">$timeout</span> <span class="o">=</span> <span class="mi">30</span><span class="p">,</span> <span class="nv">$options</span> <span class="o">=</span> <span class="k">array</span><span class="p">())</span></div><div class='line' id='LC192'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC193'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Clear errors to avoid confusion</span></div><div class='line' id='LC194'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC195'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Make sure we are __not__ connected</span></div><div class='line' id='LC196'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC197'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Already connected, generate error</span></div><div class='line' id='LC198'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Already connected to a server&#39;</span><span class="p">);</span></div><div class='line' id='LC199'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC200'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC201'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$port</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC202'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$port</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">DEFAULT_SMTP_PORT</span><span class="p">;</span></div><div class='line' id='LC203'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC204'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Connect to the SMTP server</span></div><div class='line' id='LC205'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">3</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC206'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;Connection: opening&#39;</span><span class="p">);</span></div><div class='line' id='LC207'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC208'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errno</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC209'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errstr</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC210'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$socket_context</span> <span class="o">=</span> <span class="nb">stream_context_create</span><span class="p">(</span><span class="nv">$options</span><span class="p">);</span></div><div class='line' id='LC211'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Suppress errors; connection failures are handled at a higher level</span></div><div class='line' id='LC212'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span> <span class="o">=</span> <span class="o">@</span><span class="nx">stream_socket_client</span><span class="p">(</span></div><div class='line' id='LC213'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$host</span> <span class="o">.</span> <span class="s2">&quot;:&quot;</span> <span class="o">.</span> <span class="nv">$port</span><span class="p">,</span></div><div class='line' id='LC214'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errno</span><span class="p">,</span></div><div class='line' id='LC215'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$errstr</span><span class="p">,</span></div><div class='line' id='LC216'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$timeout</span><span class="p">,</span></div><div class='line' id='LC217'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">STREAM_CLIENT_CONNECT</span><span class="p">,</span></div><div class='line' id='LC218'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$socket_context</span></div><div class='line' id='LC219'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC220'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Verify we connected properly</span></div><div class='line' id='LC221'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC222'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC223'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;Failed to connect to server&#39;</span><span class="p">,</span></div><div class='line' id='LC224'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;errno&#39;</span> <span class="o">=&gt;</span> <span class="nv">$errno</span><span class="p">,</span></div><div class='line' id='LC225'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;errstr&#39;</span> <span class="o">=&gt;</span> <span class="nv">$errstr</span></div><div class='line' id='LC226'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC227'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC228'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span></div><div class='line' id='LC229'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;SMTP ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span></div><div class='line' id='LC230'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span> <span class="s2">&quot;: </span><span class="si">$errstr</span><span class="s2"> (</span><span class="si">$errno</span><span class="s2">)&quot;</span></div><div class='line' id='LC231'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC232'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC233'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC234'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC235'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">3</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC236'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;Connection: opened&#39;</span><span class="p">);</span></div><div class='line' id='LC237'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC238'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// SMTP server can take longer to respond, give longer timeout for first read</span></div><div class='line' id='LC239'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Windows does not have support for this timeout function</span></div><div class='line' id='LC240'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="k">PHP_OS</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">)</span> <span class="o">!=</span> <span class="s1">&#39;WIN&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC241'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$max</span> <span class="o">=</span> <span class="nb">ini_get</span><span class="p">(</span><span class="s1">&#39;max_execution_time&#39;</span><span class="p">);</span></div><div class='line' id='LC242'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$max</span> <span class="o">!=</span> <span class="mi">0</span> <span class="o">&amp;&amp;</span> <span class="nv">$timeout</span> <span class="o">&gt;</span> <span class="nv">$max</span><span class="p">)</span> <span class="p">{</span> <span class="c1">// Don&#39;t bother if unlimited</span></div><div class='line' id='LC243'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">@</span><span class="nb">set_time_limit</span><span class="p">(</span><span class="nv">$timeout</span><span class="p">);</span></div><div class='line' id='LC244'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC245'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">stream_set_timeout</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span> <span class="nv">$timeout</span><span class="p">,</span> <span class="mi">0</span><span class="p">);</span></div><div class='line' id='LC246'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC247'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Get any announcement</span></div><div class='line' id='LC248'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$announce</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC249'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC250'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SERVER -&gt; CLIENT: &#39;</span> <span class="o">.</span> <span class="nv">$announce</span><span class="p">);</span></div><div class='line' id='LC251'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC252'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC253'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC254'><br/></div><div class='line' id='LC255'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC256'><span class="sd">     * Initiate a TLS (encrypted) session.</span></div><div class='line' id='LC257'><span class="sd">     * @access public</span></div><div class='line' id='LC258'><span class="sd">     * @return bool</span></div><div class='line' id='LC259'><span class="sd">     */</span></div><div class='line' id='LC260'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">startTLS</span><span class="p">()</span></div><div class='line' id='LC261'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC262'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;STARTTLS&#39;</span><span class="p">,</span> <span class="s1">&#39;STARTTLS&#39;</span><span class="p">,</span> <span class="mi">220</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC263'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC264'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC265'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Begin encrypted connection</span></div><div class='line' id='LC266'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nx">stream_socket_enable_crypto</span><span class="p">(</span></div><div class='line' id='LC267'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span></div><div class='line' id='LC268'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">true</span><span class="p">,</span></div><div class='line' id='LC269'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">STREAM_CRYPTO_METHOD_TLS_CLIENT</span></div><div class='line' id='LC270'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC271'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC272'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC273'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC274'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC275'><br/></div><div class='line' id='LC276'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC277'><span class="sd">     * Perform SMTP authentication.</span></div><div class='line' id='LC278'><span class="sd">     * Must be run after hello().</span></div><div class='line' id='LC279'><span class="sd">     * @see hello()</span></div><div class='line' id='LC280'><span class="sd">     * @param string $username    The user name</span></div><div class='line' id='LC281'><span class="sd">     * @param string $password    The password</span></div><div class='line' id='LC282'><span class="sd">     * @param string $authtype    The auth type (PLAIN, LOGIN, NTLM, CRAM-MD5)</span></div><div class='line' id='LC283'><span class="sd">     * @param string $realm       The auth realm for NTLM</span></div><div class='line' id='LC284'><span class="sd">     * @param string $workstation The auth workstation for NTLM</span></div><div class='line' id='LC285'><span class="sd">     * @access public</span></div><div class='line' id='LC286'><span class="sd">     * @return bool True if successfully authenticated.</span></div><div class='line' id='LC287'><span class="sd">     */</span></div><div class='line' id='LC288'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">authenticate</span><span class="p">(</span></div><div class='line' id='LC289'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$username</span><span class="p">,</span></div><div class='line' id='LC290'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$password</span><span class="p">,</span></div><div class='line' id='LC291'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$authtype</span> <span class="o">=</span> <span class="s1">&#39;LOGIN&#39;</span><span class="p">,</span></div><div class='line' id='LC292'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$realm</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC293'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$workstation</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span></div><div class='line' id='LC294'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC295'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="k">empty</span><span class="p">(</span><span class="nv">$authtype</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC296'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$authtype</span> <span class="o">=</span> <span class="s1">&#39;LOGIN&#39;</span><span class="p">;</span></div><div class='line' id='LC297'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC298'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">switch</span> <span class="p">(</span><span class="nv">$authtype</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC299'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;PLAIN&#39;</span><span class="o">:</span></div><div class='line' id='LC300'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Start authentication</span></div><div class='line' id='LC301'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;AUTH&#39;</span><span class="p">,</span> <span class="s1">&#39;AUTH PLAIN&#39;</span><span class="p">,</span> <span class="mi">334</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC302'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC303'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC304'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Send encoded username and password</span></div><div class='line' id='LC305'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span></div><div class='line' id='LC306'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;User &amp; Password&#39;</span><span class="p">,</span></div><div class='line' id='LC307'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">base64_encode</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\0</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$username</span> <span class="o">.</span> <span class="s2">&quot;</span><span class="se">\0</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$password</span><span class="p">),</span></div><div class='line' id='LC308'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">235</span></div><div class='line' id='LC309'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span></div><div class='line' id='LC310'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC311'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC312'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC313'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC314'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;LOGIN&#39;</span><span class="o">:</span></div><div class='line' id='LC315'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Start authentication</span></div><div class='line' id='LC316'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;AUTH&#39;</span><span class="p">,</span> <span class="s1">&#39;AUTH LOGIN&#39;</span><span class="p">,</span> <span class="mi">334</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC317'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC318'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC319'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s2">&quot;Username&quot;</span><span class="p">,</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$username</span><span class="p">),</span> <span class="mi">334</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC320'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC321'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC322'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s2">&quot;Password&quot;</span><span class="p">,</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$password</span><span class="p">),</span> <span class="mi">235</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC323'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC324'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC325'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC326'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;NTLM&#39;</span><span class="o">:</span></div><div class='line' id='LC327'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/*</span></div><div class='line' id='LC328'><span class="cm">                 * ntlm_sasl_client.php</span></div><div class='line' id='LC329'><span class="cm">                 * Bundled with Permission</span></div><div class='line' id='LC330'><span class="cm">                 *</span></div><div class='line' id='LC331'><span class="cm">                 * How to telnet in windows:</span></div><div class='line' id='LC332'><span class="cm">                 * http://technet.microsoft.com/en-us/library/aa995718%28EXCHG.65%29.aspx</span></div><div class='line' id='LC333'><span class="cm">                 * PROTOCOL Docs http://curl.haxx.se/rfc/ntlm.html#ntlmSmtpAuthentication</span></div><div class='line' id='LC334'><span class="cm">                 */</span></div><div class='line' id='LC335'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">require_once</span> <span class="s1">&#39;extras/ntlm_sasl_client.php&#39;</span><span class="p">;</span></div><div class='line' id='LC336'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$temp</span> <span class="o">=</span> <span class="k">new</span> <span class="k">stdClass</span><span class="p">();</span></div><div class='line' id='LC337'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ntlm_client</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">ntlm_sasl_client_class</span><span class="p">;</span></div><div class='line' id='LC338'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Check that functions are available</span></div><div class='line' id='LC339'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$ntlm_client</span><span class="o">-&gt;</span><span class="na">Initialize</span><span class="p">(</span><span class="nv">$temp</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC340'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="nv">$temp</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">);</span></div><div class='line' id='LC341'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC342'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span></div><div class='line' id='LC343'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;You need to enable some modules in your php.ini file: &#39;</span></div><div class='line' id='LC344'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span></div><div class='line' id='LC345'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC346'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC347'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC348'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC349'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//msg1</span></div><div class='line' id='LC350'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg1</span> <span class="o">=</span> <span class="nv">$ntlm_client</span><span class="o">-&gt;</span><span class="na">TypeMsg1</span><span class="p">(</span><span class="nv">$realm</span><span class="p">,</span> <span class="nv">$workstation</span><span class="p">);</span> <span class="c1">//msg1</span></div><div class='line' id='LC351'><br/></div><div class='line' id='LC352'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span></div><div class='line' id='LC353'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;AUTH NTLM&#39;</span><span class="p">,</span></div><div class='line' id='LC354'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;AUTH NTLM &#39;</span> <span class="o">.</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$msg1</span><span class="p">),</span></div><div class='line' id='LC355'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">334</span></div><div class='line' id='LC356'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span></div><div class='line' id='LC357'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC358'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC359'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC360'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Though 0 based, there is a white space after the 3 digit number</span></div><div class='line' id='LC361'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//msg2</span></div><div class='line' id='LC362'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$challenge</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">last_reply</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC363'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$challenge</span> <span class="o">=</span> <span class="nb">base64_decode</span><span class="p">(</span><span class="nv">$challenge</span><span class="p">);</span></div><div class='line' id='LC364'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ntlm_res</span> <span class="o">=</span> <span class="nv">$ntlm_client</span><span class="o">-&gt;</span><span class="na">NTLMResponse</span><span class="p">(</span></div><div class='line' id='LC365'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">substr</span><span class="p">(</span><span class="nv">$challenge</span><span class="p">,</span> <span class="mi">24</span><span class="p">,</span> <span class="mi">8</span><span class="p">),</span></div><div class='line' id='LC366'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$password</span></div><div class='line' id='LC367'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC368'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//msg3</span></div><div class='line' id='LC369'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$msg3</span> <span class="o">=</span> <span class="nv">$ntlm_client</span><span class="o">-&gt;</span><span class="na">TypeMsg3</span><span class="p">(</span></div><div class='line' id='LC370'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ntlm_res</span><span class="p">,</span></div><div class='line' id='LC371'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$username</span><span class="p">,</span></div><div class='line' id='LC372'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$realm</span><span class="p">,</span></div><div class='line' id='LC373'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$workstation</span></div><div class='line' id='LC374'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC375'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// send encoded username</span></div><div class='line' id='LC376'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;Username&#39;</span><span class="p">,</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$msg3</span><span class="p">),</span> <span class="mi">235</span><span class="p">);</span></div><div class='line' id='LC377'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC378'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">case</span> <span class="s1">&#39;CRAM-MD5&#39;</span><span class="o">:</span></div><div class='line' id='LC379'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Start authentication</span></div><div class='line' id='LC380'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;AUTH CRAM-MD5&#39;</span><span class="p">,</span> <span class="s1">&#39;AUTH CRAM-MD5&#39;</span><span class="p">,</span> <span class="mi">334</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC381'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC382'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC383'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Get the challenge</span></div><div class='line' id='LC384'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$challenge</span> <span class="o">=</span> <span class="nb">base64_decode</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">last_reply</span><span class="p">,</span> <span class="mi">4</span><span class="p">));</span></div><div class='line' id='LC385'><br/></div><div class='line' id='LC386'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Build the response</span></div><div class='line' id='LC387'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$response</span> <span class="o">=</span> <span class="nv">$username</span> <span class="o">.</span> <span class="s1">&#39; &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">hmac</span><span class="p">(</span><span class="nv">$challenge</span><span class="p">,</span> <span class="nv">$password</span><span class="p">);</span></div><div class='line' id='LC388'><br/></div><div class='line' id='LC389'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// send encoded credentials</span></div><div class='line' id='LC390'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;Username&#39;</span><span class="p">,</span> <span class="nb">base64_encode</span><span class="p">(</span><span class="nv">$response</span><span class="p">),</span> <span class="mi">235</span><span class="p">);</span></div><div class='line' id='LC391'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC392'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC393'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC394'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC395'><br/></div><div class='line' id='LC396'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC397'><span class="sd">     * Calculate an MD5 HMAC hash.</span></div><div class='line' id='LC398'><span class="sd">     * Works like hash_hmac(&#39;md5&#39;, $data, $key)</span></div><div class='line' id='LC399'><span class="sd">     * in case that function is not available</span></div><div class='line' id='LC400'><span class="sd">     * @param string $data The data to hash</span></div><div class='line' id='LC401'><span class="sd">     * @param string $key  The key to hash with</span></div><div class='line' id='LC402'><span class="sd">     * @access protected</span></div><div class='line' id='LC403'><span class="sd">     * @return string</span></div><div class='line' id='LC404'><span class="sd">     */</span></div><div class='line' id='LC405'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">hmac</span><span class="p">(</span><span class="nv">$data</span><span class="p">,</span> <span class="nv">$key</span><span class="p">)</span></div><div class='line' id='LC406'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC407'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">function_exists</span><span class="p">(</span><span class="s1">&#39;hash_hmac&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC408'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">hash_hmac</span><span class="p">(</span><span class="s1">&#39;md5&#39;</span><span class="p">,</span> <span class="nv">$data</span><span class="p">,</span> <span class="nv">$key</span><span class="p">);</span></div><div class='line' id='LC409'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC410'><br/></div><div class='line' id='LC411'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// The following borrowed from</span></div><div class='line' id='LC412'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// http://php.net/manual/en/function.mhash.php#27225</span></div><div class='line' id='LC413'><br/></div><div class='line' id='LC414'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// RFC 2104 HMAC implementation for php.</span></div><div class='line' id='LC415'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Creates an md5 HMAC.</span></div><div class='line' id='LC416'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Eliminates the need to install mhash to compute a HMAC</span></div><div class='line' id='LC417'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Hacked by Lance Rushing</span></div><div class='line' id='LC418'><br/></div><div class='line' id='LC419'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$b</span> <span class="o">=</span> <span class="mi">64</span><span class="p">;</span> <span class="c1">// byte length for md5</span></div><div class='line' id='LC420'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span> <span class="o">&gt;</span> <span class="nv">$b</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC421'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$key</span> <span class="o">=</span> <span class="nb">pack</span><span class="p">(</span><span class="s1">&#39;H*&#39;</span><span class="p">,</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$key</span><span class="p">));</span></div><div class='line' id='LC422'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC423'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$key</span> <span class="o">=</span> <span class="nb">str_pad</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$b</span><span class="p">,</span> <span class="nb">chr</span><span class="p">(</span><span class="mh">0x00</span><span class="p">));</span></div><div class='line' id='LC424'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$ipad</span> <span class="o">=</span> <span class="nb">str_pad</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$b</span><span class="p">,</span> <span class="nb">chr</span><span class="p">(</span><span class="mh">0x36</span><span class="p">));</span></div><div class='line' id='LC425'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$opad</span> <span class="o">=</span> <span class="nb">str_pad</span><span class="p">(</span><span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$b</span><span class="p">,</span> <span class="nb">chr</span><span class="p">(</span><span class="mh">0x5c</span><span class="p">));</span></div><div class='line' id='LC426'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$k_ipad</span> <span class="o">=</span> <span class="nv">$key</span> <span class="o">^</span> <span class="nv">$ipad</span><span class="p">;</span></div><div class='line' id='LC427'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$k_opad</span> <span class="o">=</span> <span class="nv">$key</span> <span class="o">^</span> <span class="nv">$opad</span><span class="p">;</span></div><div class='line' id='LC428'><br/></div><div class='line' id='LC429'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$k_opad</span> <span class="o">.</span> <span class="nb">pack</span><span class="p">(</span><span class="s1">&#39;H*&#39;</span><span class="p">,</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$k_ipad</span> <span class="o">.</span> <span class="nv">$data</span><span class="p">)));</span></div><div class='line' id='LC430'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC431'><br/></div><div class='line' id='LC432'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC433'><span class="sd">     * Check connection state.</span></div><div class='line' id='LC434'><span class="sd">     * @access public</span></div><div class='line' id='LC435'><span class="sd">     * @return bool True if connected.</span></div><div class='line' id='LC436'><span class="sd">     */</span></div><div class='line' id='LC437'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">connected</span><span class="p">()</span></div><div class='line' id='LC438'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC439'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC440'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$sock_status</span> <span class="o">=</span> <span class="nb">stream_get_meta_data</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">);</span></div><div class='line' id='LC441'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$sock_status</span><span class="p">[</span><span class="s1">&#39;eof&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC442'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// the socket is valid but we are not connected</span></div><div class='line' id='LC443'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC444'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span></div><div class='line' id='LC445'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;SMTP NOTICE: EOF caught while checking if connected&#39;</span></div><div class='line' id='LC446'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC447'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC448'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">close</span><span class="p">();</span></div><div class='line' id='LC449'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC450'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC451'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span> <span class="c1">// everything looks good</span></div><div class='line' id='LC452'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC453'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC454'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC455'><br/></div><div class='line' id='LC456'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC457'><span class="sd">     * Close the socket and clean up the state of the class.</span></div><div class='line' id='LC458'><span class="sd">     * Don&#39;t use this function without first trying to use QUIT.</span></div><div class='line' id='LC459'><span class="sd">     * @see quit()</span></div><div class='line' id='LC460'><span class="sd">     * @access public</span></div><div class='line' id='LC461'><span class="sd">     * @return void</span></div><div class='line' id='LC462'><span class="sd">     */</span></div><div class='line' id='LC463'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">close</span><span class="p">()</span></div><div class='line' id='LC464'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC465'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span> <span class="c1">// so there is no confusion</span></div><div class='line' id='LC466'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">helo_rply</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC467'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC468'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// close the connection and cleanup</span></div><div class='line' id='LC469'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">fclose</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">);</span></div><div class='line' id='LC470'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">3</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC471'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;Connection: closed&#39;</span><span class="p">);</span></div><div class='line' id='LC472'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC473'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC474'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC475'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC476'><br/></div><div class='line' id='LC477'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC478'><span class="sd">     * Send an SMTP DATA command.</span></div><div class='line' id='LC479'><span class="sd">     * Issues a data command and sends the msg_data to the server,</span></div><div class='line' id='LC480'><span class="sd">     * finializing the mail transaction. $msg_data is the message</span></div><div class='line' id='LC481'><span class="sd">     * that is to be send with the headers. Each header needs to be</span></div><div class='line' id='LC482'><span class="sd">     * on a single line followed by a &lt;CRLF&gt; with the message headers</span></div><div class='line' id='LC483'><span class="sd">     * and the message body being separated by and additional &lt;CRLF&gt;.</span></div><div class='line' id='LC484'><span class="sd">     * Implements rfc 821: DATA &lt;CRLF&gt;</span></div><div class='line' id='LC485'><span class="sd">     * @param string $msg_data Message data to send</span></div><div class='line' id='LC486'><span class="sd">     * @access public</span></div><div class='line' id='LC487'><span class="sd">     * @return bool</span></div><div class='line' id='LC488'><span class="sd">     */</span></div><div class='line' id='LC489'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">data</span><span class="p">(</span><span class="nv">$msg_data</span><span class="p">)</span></div><div class='line' id='LC490'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC491'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;DATA&#39;</span><span class="p">,</span> <span class="s1">&#39;DATA&#39;</span><span class="p">,</span> <span class="mi">354</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC492'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC493'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC494'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/* The server is ready to accept data!</span></div><div class='line' id='LC495'><span class="cm">         * According to rfc821 we should not send more than 1000 characters on a single line (including the CRLF)</span></div><div class='line' id='LC496'><span class="cm">         * so we will break the data up into lines by \r and/or \n then if needed we will break each of those into</span></div><div class='line' id='LC497'><span class="cm">         * smaller lines to fit within the limit.</span></div><div class='line' id='LC498'><span class="cm">         * We will also look for lines that start with a &#39;.&#39; and prepend an additional &#39;.&#39;.</span></div><div class='line' id='LC499'><span class="cm">         * NOTE: this does not count towards line-length limit.</span></div><div class='line' id='LC500'><span class="cm">         */</span></div><div class='line' id='LC501'><br/></div><div class='line' id='LC502'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Normalize line breaks before exploding</span></div><div class='line' id='LC503'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nb">str_replace</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="s2">&quot;</span><span class="se">\r\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="s2">&quot;</span><span class="se">\r</span><span class="s2">&quot;</span><span class="p">),</span> <span class="s2">&quot;</span><span class="se">\n</span><span class="s2">&quot;</span><span class="p">,</span> <span class="nv">$msg_data</span><span class="p">));</span></div><div class='line' id='LC504'><br/></div><div class='line' id='LC505'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/* To distinguish between a complete RFC822 message and a plain message body, we check if the first field</span></div><div class='line' id='LC506'><span class="cm">         * of the first line (&#39;:&#39; separated) does not contain a space then it _should_ be a header and we will</span></div><div class='line' id='LC507'><span class="cm">         * process all lines before a blank line as headers.</span></div><div class='line' id='LC508'><span class="cm">         */</span></div><div class='line' id='LC509'><br/></div><div class='line' id='LC510'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$field</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$lines</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="mi">0</span><span class="p">,</span> <span class="nb">strpos</span><span class="p">(</span><span class="nv">$lines</span><span class="p">[</span><span class="mi">0</span><span class="p">],</span> <span class="s1">&#39;:&#39;</span><span class="p">));</span></div><div class='line' id='LC511'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$in_headers</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC512'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$field</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="nb">strpos</span><span class="p">(</span><span class="nv">$field</span><span class="p">,</span> <span class="s1">&#39; &#39;</span><span class="p">)</span> <span class="o">===</span> <span class="k">false</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC513'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$in_headers</span> <span class="o">=</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC514'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC515'><br/></div><div class='line' id='LC516'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$lines</span> <span class="k">as</span> <span class="nv">$line</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC517'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines_out</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC518'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$in_headers</span> <span class="k">and</span> <span class="nv">$line</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC519'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$in_headers</span> <span class="o">=</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC520'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC521'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// ok we need to break this line up into several smaller lines</span></div><div class='line' id='LC522'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//This is a small micro-optimisation: isset($str[$len]) is equivalent to (strlen($str) &gt; $len)</span></div><div class='line' id='LC523'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$line</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MAX_LINE_LENGTH</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC524'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Working backwards, try to find a space within the last MAX_LINE_LENGTH chars of the line to break on</span></div><div class='line' id='LC525'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//so as to avoid breaking in the middle of a word</span></div><div class='line' id='LC526'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pos</span> <span class="o">=</span> <span class="nb">strrpos</span><span class="p">(</span><span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">MAX_LINE_LENGTH</span><span class="p">),</span> <span class="s1">&#39; &#39;</span><span class="p">);</span></div><div class='line' id='LC527'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$pos</span><span class="p">)</span> <span class="p">{</span> <span class="c1">//Deliberately matches both false and 0</span></div><div class='line' id='LC528'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//No nice break found, add a hard break</span></div><div class='line' id='LC529'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$pos</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">MAX_LINE_LENGTH</span> <span class="o">-</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC530'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines_out</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$pos</span><span class="p">);</span></div><div class='line' id='LC531'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="nv">$pos</span><span class="p">);</span></div><div class='line' id='LC532'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC533'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Break at the found point</span></div><div class='line' id='LC534'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines_out</span><span class="p">[]</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="nv">$pos</span><span class="p">);</span></div><div class='line' id='LC535'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//Move along by the amount we dealt with</span></div><div class='line' id='LC536'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$line</span><span class="p">,</span> <span class="nv">$pos</span> <span class="o">+</span> <span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC537'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC538'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="cm">/* If processing headers add a LWSP-char to the front of new line</span></div><div class='line' id='LC539'><span class="cm">                 * RFC822 section 3.1.1</span></div><div class='line' id='LC540'><span class="cm">                 */</span></div><div class='line' id='LC541'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$in_headers</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC542'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line</span> <span class="o">=</span> <span class="s2">&quot;</span><span class="se">\t</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$line</span><span class="p">;</span></div><div class='line' id='LC543'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC544'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC545'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$lines_out</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$line</span><span class="p">;</span></div><div class='line' id='LC546'><br/></div><div class='line' id='LC547'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Send the lines to the server</span></div><div class='line' id='LC548'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$lines_out</span> <span class="k">as</span> <span class="nv">$line_out</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC549'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">//RFC2821 section 4.5.2</span></div><div class='line' id='LC550'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$line_out</span><span class="p">)</span> <span class="k">and</span> <span class="nv">$line_out</span><span class="p">[</span><span class="mi">0</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39;.&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC551'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$line_out</span> <span class="o">=</span> <span class="s1">&#39;.&#39;</span> <span class="o">.</span> <span class="nv">$line_out</span><span class="p">;</span></div><div class='line' id='LC552'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC553'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nv">$line_out</span> <span class="o">.</span> <span class="nx">self</span><span class="o">::</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC554'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC555'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC556'><br/></div><div class='line' id='LC557'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Message data has been sent, complete the command</span></div><div class='line' id='LC558'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;DATA END&#39;</span><span class="p">,</span> <span class="s1">&#39;.&#39;</span><span class="p">,</span> <span class="mi">250</span><span class="p">);</span></div><div class='line' id='LC559'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC560'><br/></div><div class='line' id='LC561'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC562'><span class="sd">     * Send an SMTP HELO or EHLO command.</span></div><div class='line' id='LC563'><span class="sd">     * Used to identify the sending server to the receiving server.</span></div><div class='line' id='LC564'><span class="sd">     * This makes sure that client and server are in a known state.</span></div><div class='line' id='LC565'><span class="sd">     * Implements RFC 821: HELO &lt;SP&gt; &lt;domain&gt; &lt;CRLF&gt;</span></div><div class='line' id='LC566'><span class="sd">     * and RFC 2821 EHLO.</span></div><div class='line' id='LC567'><span class="sd">     * @param string $host The host name or IP to connect to</span></div><div class='line' id='LC568'><span class="sd">     * @access public</span></div><div class='line' id='LC569'><span class="sd">     * @return bool</span></div><div class='line' id='LC570'><span class="sd">     */</span></div><div class='line' id='LC571'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">hello</span><span class="p">(</span><span class="nv">$host</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span></div><div class='line' id='LC572'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC573'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Try extended hello first (RFC 2821)</span></div><div class='line' id='LC574'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nx">bool</span><span class="p">)(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendHello</span><span class="p">(</span><span class="s1">&#39;EHLO&#39;</span><span class="p">,</span> <span class="nv">$host</span><span class="p">)</span> <span class="k">or</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendHello</span><span class="p">(</span><span class="s1">&#39;HELO&#39;</span><span class="p">,</span> <span class="nv">$host</span><span class="p">));</span></div><div class='line' id='LC575'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC576'><br/></div><div class='line' id='LC577'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC578'><span class="sd">     * Send an SMTP HELO or EHLO command.</span></div><div class='line' id='LC579'><span class="sd">     * Low-level implementation used by hello()</span></div><div class='line' id='LC580'><span class="sd">     * @see hello()</span></div><div class='line' id='LC581'><span class="sd">     * @param string $hello The HELO string</span></div><div class='line' id='LC582'><span class="sd">     * @param string $host The hostname to say we are</span></div><div class='line' id='LC583'><span class="sd">     * @access protected</span></div><div class='line' id='LC584'><span class="sd">     * @return bool</span></div><div class='line' id='LC585'><span class="sd">     */</span></div><div class='line' id='LC586'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">sendHello</span><span class="p">(</span><span class="nv">$hello</span><span class="p">,</span> <span class="nv">$host</span><span class="p">)</span></div><div class='line' id='LC587'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC588'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$noerror</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="nv">$hello</span><span class="p">,</span> <span class="nv">$hello</span> <span class="o">.</span> <span class="s1">&#39; &#39;</span> <span class="o">.</span> <span class="nv">$host</span><span class="p">,</span> <span class="mi">250</span><span class="p">);</span></div><div class='line' id='LC589'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">helo_rply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">last_reply</span><span class="p">;</span></div><div class='line' id='LC590'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$noerror</span><span class="p">;</span></div><div class='line' id='LC591'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC592'><br/></div><div class='line' id='LC593'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC594'><span class="sd">     * Send an SMTP MAIL command.</span></div><div class='line' id='LC595'><span class="sd">     * Starts a mail transaction from the email address specified in</span></div><div class='line' id='LC596'><span class="sd">     * $from. Returns true if successful or false otherwise. If True</span></div><div class='line' id='LC597'><span class="sd">     * the mail transaction is started and then one or more recipient</span></div><div class='line' id='LC598'><span class="sd">     * commands may be called followed by a data command.</span></div><div class='line' id='LC599'><span class="sd">     * Implements rfc 821: MAIL &lt;SP&gt; FROM:&lt;reverse-path&gt; &lt;CRLF&gt;</span></div><div class='line' id='LC600'><span class="sd">     * @param string $from Source address of this message</span></div><div class='line' id='LC601'><span class="sd">     * @access public</span></div><div class='line' id='LC602'><span class="sd">     * @return bool</span></div><div class='line' id='LC603'><span class="sd">     */</span></div><div class='line' id='LC604'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">mail</span><span class="p">(</span><span class="nv">$from</span><span class="p">)</span></div><div class='line' id='LC605'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC606'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$useVerp</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_verp</span> <span class="o">?</span> <span class="s1">&#39; XVERP&#39;</span> <span class="o">:</span> <span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC607'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span></div><div class='line' id='LC608'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;MAIL FROM&#39;</span><span class="p">,</span></div><div class='line' id='LC609'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;MAIL FROM:&lt;&#39;</span> <span class="o">.</span> <span class="nv">$from</span> <span class="o">.</span> <span class="s1">&#39;&gt;&#39;</span> <span class="o">.</span> <span class="nv">$useVerp</span><span class="p">,</span></div><div class='line' id='LC610'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mi">250</span></div><div class='line' id='LC611'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC612'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC613'><br/></div><div class='line' id='LC614'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC615'><span class="sd">     * Send an SMTP QUIT command.</span></div><div class='line' id='LC616'><span class="sd">     * Closes the socket if there is no error or the $close_on_error argument is true.</span></div><div class='line' id='LC617'><span class="sd">     * Implements from rfc 821: QUIT &lt;CRLF&gt;</span></div><div class='line' id='LC618'><span class="sd">     * @param bool $close_on_error Should the connection close if an error occurs?</span></div><div class='line' id='LC619'><span class="sd">     * @access public</span></div><div class='line' id='LC620'><span class="sd">     * @return bool</span></div><div class='line' id='LC621'><span class="sd">     */</span></div><div class='line' id='LC622'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">quit</span><span class="p">(</span><span class="nv">$close_on_error</span> <span class="o">=</span> <span class="k">true</span><span class="p">)</span></div><div class='line' id='LC623'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC624'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$noerror</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;QUIT&#39;</span><span class="p">,</span> <span class="s1">&#39;QUIT&#39;</span><span class="p">,</span> <span class="mi">221</span><span class="p">);</span></div><div class='line' id='LC625'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$e</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">;</span> <span class="c1">//Save any error</span></div><div class='line' id='LC626'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$noerror</span> <span class="k">or</span> <span class="nv">$close_on_error</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC627'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">close</span><span class="p">();</span></div><div class='line' id='LC628'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="nv">$e</span><span class="p">;</span> <span class="c1">//Restore any error from the quit command</span></div><div class='line' id='LC629'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC630'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$noerror</span><span class="p">;</span></div><div class='line' id='LC631'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC632'><br/></div><div class='line' id='LC633'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC634'><span class="sd">     * Send an SMTP RCPT command.</span></div><div class='line' id='LC635'><span class="sd">     * Sets the TO argument to $to.</span></div><div class='line' id='LC636'><span class="sd">     * Returns true if the recipient was accepted false if it was rejected.</span></div><div class='line' id='LC637'><span class="sd">     * Implements from rfc 821: RCPT &lt;SP&gt; TO:&lt;forward-path&gt; &lt;CRLF&gt;</span></div><div class='line' id='LC638'><span class="sd">     * @param string $to The address the message is being sent to</span></div><div class='line' id='LC639'><span class="sd">     * @access public</span></div><div class='line' id='LC640'><span class="sd">     * @return bool</span></div><div class='line' id='LC641'><span class="sd">     */</span></div><div class='line' id='LC642'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">recipient</span><span class="p">(</span><span class="nv">$to</span><span class="p">)</span></div><div class='line' id='LC643'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC644'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span></div><div class='line' id='LC645'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;RCPT TO&#39;</span><span class="p">,</span></div><div class='line' id='LC646'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;RCPT TO:&lt;&#39;</span> <span class="o">.</span> <span class="nv">$to</span> <span class="o">.</span> <span class="s1">&#39;&gt;&#39;</span><span class="p">,</span></div><div class='line' id='LC647'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="mi">250</span><span class="p">,</span> <span class="mi">251</span><span class="p">)</span></div><div class='line' id='LC648'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC649'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC650'><br/></div><div class='line' id='LC651'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC652'><span class="sd">     * Send an SMTP RSET command.</span></div><div class='line' id='LC653'><span class="sd">     * Abort any transaction that is currently in progress.</span></div><div class='line' id='LC654'><span class="sd">     * Implements rfc 821: RSET &lt;CRLF&gt;</span></div><div class='line' id='LC655'><span class="sd">     * @access public</span></div><div class='line' id='LC656'><span class="sd">     * @return bool True on success.</span></div><div class='line' id='LC657'><span class="sd">     */</span></div><div class='line' id='LC658'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">reset</span><span class="p">()</span></div><div class='line' id='LC659'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC660'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;RSET&#39;</span><span class="p">,</span> <span class="s1">&#39;RSET&#39;</span><span class="p">,</span> <span class="mi">250</span><span class="p">);</span></div><div class='line' id='LC661'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC662'><br/></div><div class='line' id='LC663'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC664'><span class="sd">     * Send a command to an SMTP server and check its return code.</span></div><div class='line' id='LC665'><span class="sd">     * @param string $command       The command name - not sent to the server</span></div><div class='line' id='LC666'><span class="sd">     * @param string $commandstring The actual command to send</span></div><div class='line' id='LC667'><span class="sd">     * @param int|array $expect     One or more expected integer success codes</span></div><div class='line' id='LC668'><span class="sd">     * @access protected</span></div><div class='line' id='LC669'><span class="sd">     * @return bool True on success.</span></div><div class='line' id='LC670'><span class="sd">     */</span></div><div class='line' id='LC671'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">sendCommand</span><span class="p">(</span><span class="nv">$command</span><span class="p">,</span> <span class="nv">$commandstring</span><span class="p">,</span> <span class="nv">$expect</span><span class="p">)</span></div><div class='line' id='LC672'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC673'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">connected</span><span class="p">())</span> <span class="p">{</span></div><div class='line' id='LC674'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC675'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s2">&quot;Called </span><span class="si">$command</span><span class="s2"> without being connected&quot;</span></div><div class='line' id='LC676'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC677'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC678'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC679'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">client_send</span><span class="p">(</span><span class="nv">$commandstring</span> <span class="o">.</span> <span class="nx">self</span><span class="o">::</span><span class="na">CRLF</span><span class="p">);</span></div><div class='line' id='LC680'><br/></div><div class='line' id='LC681'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$reply</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">get_lines</span><span class="p">();</span></div><div class='line' id='LC682'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$code</span> <span class="o">=</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$reply</span><span class="p">,</span> <span class="mi">0</span><span class="p">,</span> <span class="mi">3</span><span class="p">);</span></div><div class='line' id='LC683'><br/></div><div class='line' id='LC684'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">2</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC685'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SERVER -&gt; CLIENT: &#39;</span> <span class="o">.</span> <span class="nv">$reply</span><span class="p">);</span></div><div class='line' id='LC686'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC687'><br/></div><div class='line' id='LC688'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$code</span><span class="p">,</span> <span class="p">(</span><span class="k">array</span><span class="p">)</span><span class="nv">$expect</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC689'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">last_reply</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC690'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC691'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s2">&quot;</span><span class="si">$command</span><span class="s2"> command failed&quot;</span><span class="p">,</span></div><div class='line' id='LC692'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;smtp_code&#39;</span> <span class="o">=&gt;</span> <span class="nv">$code</span><span class="p">,</span></div><div class='line' id='LC693'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;detail&#39;</span> <span class="o">=&gt;</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$reply</span><span class="p">,</span> <span class="mi">4</span><span class="p">)</span></div><div class='line' id='LC694'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC695'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC696'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span></div><div class='line' id='LC697'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;SMTP ERROR: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;: &#39;</span> <span class="o">.</span> <span class="nv">$reply</span></div><div class='line' id='LC698'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC699'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC700'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC701'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC702'><br/></div><div class='line' id='LC703'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">last_reply</span> <span class="o">=</span> <span class="nv">$reply</span><span class="p">;</span></div><div class='line' id='LC704'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">null</span><span class="p">;</span></div><div class='line' id='LC705'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">true</span><span class="p">;</span></div><div class='line' id='LC706'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC707'><br/></div><div class='line' id='LC708'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC709'><span class="sd">     * Send an SMTP SAML command.</span></div><div class='line' id='LC710'><span class="sd">     * Starts a mail transaction from the email address specified in $from.</span></div><div class='line' id='LC711'><span class="sd">     * Returns true if successful or false otherwise. If True</span></div><div class='line' id='LC712'><span class="sd">     * the mail transaction is started and then one or more recipient</span></div><div class='line' id='LC713'><span class="sd">     * commands may be called followed by a data command. This command</span></div><div class='line' id='LC714'><span class="sd">     * will send the message to the users terminal if they are logged</span></div><div class='line' id='LC715'><span class="sd">     * in and send them an email.</span></div><div class='line' id='LC716'><span class="sd">     * Implements rfc 821: SAML &lt;SP&gt; FROM:&lt;reverse-path&gt; &lt;CRLF&gt;</span></div><div class='line' id='LC717'><span class="sd">     * @param string $from The address the message is from</span></div><div class='line' id='LC718'><span class="sd">     * @access public</span></div><div class='line' id='LC719'><span class="sd">     * @return bool</span></div><div class='line' id='LC720'><span class="sd">     */</span></div><div class='line' id='LC721'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">sendAndMail</span><span class="p">(</span><span class="nv">$from</span><span class="p">)</span></div><div class='line' id='LC722'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC723'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;SAML&#39;</span><span class="p">,</span> <span class="s2">&quot;SAML FROM:</span><span class="si">$from</span><span class="s2">&quot;</span><span class="p">,</span> <span class="mi">250</span><span class="p">);</span></div><div class='line' id='LC724'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC725'><br/></div><div class='line' id='LC726'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC727'><span class="sd">     * Send an SMTP VRFY command.</span></div><div class='line' id='LC728'><span class="sd">     * @param string $name The name to verify</span></div><div class='line' id='LC729'><span class="sd">     * @access public</span></div><div class='line' id='LC730'><span class="sd">     * @return bool</span></div><div class='line' id='LC731'><span class="sd">     */</span></div><div class='line' id='LC732'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">verify</span><span class="p">(</span><span class="nv">$name</span><span class="p">)</span></div><div class='line' id='LC733'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC734'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;VRFY&#39;</span><span class="p">,</span> <span class="s2">&quot;VRFY </span><span class="si">$name</span><span class="s2">&quot;</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="mi">250</span><span class="p">,</span> <span class="mi">251</span><span class="p">));</span></div><div class='line' id='LC735'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC736'><br/></div><div class='line' id='LC737'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC738'><span class="sd">     * Send an SMTP NOOP command.</span></div><div class='line' id='LC739'><span class="sd">     * Used to keep keep-alives alive, doesn&#39;t actually do anything</span></div><div class='line' id='LC740'><span class="sd">     * @access public</span></div><div class='line' id='LC741'><span class="sd">     * @return bool</span></div><div class='line' id='LC742'><span class="sd">     */</span></div><div class='line' id='LC743'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">noop</span><span class="p">()</span></div><div class='line' id='LC744'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC745'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">sendCommand</span><span class="p">(</span><span class="s1">&#39;NOOP&#39;</span><span class="p">,</span> <span class="s1">&#39;NOOP&#39;</span><span class="p">,</span> <span class="mi">250</span><span class="p">);</span></div><div class='line' id='LC746'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC747'><br/></div><div class='line' id='LC748'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC749'><span class="sd">     * Send an SMTP TURN command.</span></div><div class='line' id='LC750'><span class="sd">     * This is an optional command for SMTP that this class does not support.</span></div><div class='line' id='LC751'><span class="sd">     * This method is here to make the RFC821 Definition complete for this class</span></div><div class='line' id='LC752'><span class="sd">     * and _may_ be implemented in future</span></div><div class='line' id='LC753'><span class="sd">     * Implements from rfc 821: TURN &lt;CRLF&gt;</span></div><div class='line' id='LC754'><span class="sd">     * @access public</span></div><div class='line' id='LC755'><span class="sd">     * @return bool</span></div><div class='line' id='LC756'><span class="sd">     */</span></div><div class='line' id='LC757'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">turn</span><span class="p">()</span></div><div class='line' id='LC758'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC759'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC760'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;error&#39;</span> <span class="o">=&gt;</span> <span class="s1">&#39;The SMTP TURN command is not implemented&#39;</span></div><div class='line' id='LC761'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC762'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC763'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s1">&#39;SMTP NOTICE: &#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">[</span><span class="s1">&#39;error&#39;</span><span class="p">]);</span></div><div class='line' id='LC764'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC765'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">false</span><span class="p">;</span></div><div class='line' id='LC766'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC767'><br/></div><div class='line' id='LC768'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC769'><span class="sd">     * Send raw data to the server.</span></div><div class='line' id='LC770'><span class="sd">     * @param string $data The data to send</span></div><div class='line' id='LC771'><span class="sd">     * @access public</span></div><div class='line' id='LC772'><span class="sd">     * @return int|bool The number of bytes sent to the server or false on error</span></div><div class='line' id='LC773'><span class="sd">     */</span></div><div class='line' id='LC774'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">client_send</span><span class="p">(</span><span class="nv">$data</span><span class="p">)</span></div><div class='line' id='LC775'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC776'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">1</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC777'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s2">&quot;CLIENT -&gt; SERVER: </span><span class="si">$data</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC778'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC779'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">fwrite</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span> <span class="nv">$data</span><span class="p">);</span></div><div class='line' id='LC780'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC781'><br/></div><div class='line' id='LC782'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC783'><span class="sd">     * Get the latest error.</span></div><div class='line' id='LC784'><span class="sd">     * @access public</span></div><div class='line' id='LC785'><span class="sd">     * @return array</span></div><div class='line' id='LC786'><span class="sd">     */</span></div><div class='line' id='LC787'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getError</span><span class="p">()</span></div><div class='line' id='LC788'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC789'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">error</span><span class="p">;</span></div><div class='line' id='LC790'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC791'><br/></div><div class='line' id='LC792'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC793'><span class="sd">     * Get the last reply from the server.</span></div><div class='line' id='LC794'><span class="sd">     * @access public</span></div><div class='line' id='LC795'><span class="sd">     * @return string</span></div><div class='line' id='LC796'><span class="sd">     */</span></div><div class='line' id='LC797'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getLastReply</span><span class="p">()</span></div><div class='line' id='LC798'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC799'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">last_reply</span><span class="p">;</span></div><div class='line' id='LC800'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC801'><br/></div><div class='line' id='LC802'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC803'><span class="sd">     * Read the SMTP server&#39;s response.</span></div><div class='line' id='LC804'><span class="sd">     * Either before eof or socket timeout occurs on the operation.</span></div><div class='line' id='LC805'><span class="sd">     * With SMTP we can tell if we have more lines to read if the</span></div><div class='line' id='LC806'><span class="sd">     * 4th character is &#39;-&#39; symbol. If it is a space then we don&#39;t</span></div><div class='line' id='LC807'><span class="sd">     * need to read anything else.</span></div><div class='line' id='LC808'><span class="sd">     * @access protected</span></div><div class='line' id='LC809'><span class="sd">     * @return string</span></div><div class='line' id='LC810'><span class="sd">     */</span></div><div class='line' id='LC811'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">protected</span> <span class="k">function</span> <span class="nf">get_lines</span><span class="p">()</span></div><div class='line' id='LC812'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC813'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If the connection is bad, give up straight away</span></div><div class='line' id='LC814'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">is_resource</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC815'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC816'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC817'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$data</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC818'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$endtime</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC819'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">stream_set_timeout</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timeout</span><span class="p">);</span></div><div class='line' id='LC820'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timelimit</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC821'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$endtime</span> <span class="o">=</span> <span class="nb">time</span><span class="p">()</span> <span class="o">+</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timelimit</span><span class="p">;</span></div><div class='line' id='LC822'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC823'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">(</span><span class="nb">is_resource</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">)</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">feof</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC824'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$str</span> <span class="o">=</span> <span class="o">@</span><span class="nb">fgets</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">,</span> <span class="mi">515</span><span class="p">);</span></div><div class='line' id='LC825'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">4</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC826'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s2">&quot;SMTP -&gt; get_lines(): </span><span class="se">\$</span><span class="s2">data was </span><span class="se">\&quot;</span><span class="si">$data</span><span class="se">\&quot;</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC827'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s2">&quot;SMTP -&gt; get_lines(): </span><span class="se">\$</span><span class="s2">str is </span><span class="se">\&quot;</span><span class="si">$str</span><span class="se">\&quot;</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC828'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC829'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$data</span> <span class="o">.=</span> <span class="nv">$str</span><span class="p">;</span></div><div class='line' id='LC830'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">4</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC831'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span><span class="s2">&quot;SMTP -&gt; get_lines(): </span><span class="se">\$</span><span class="s2">data is </span><span class="se">\&quot;</span><span class="si">$data</span><span class="se">\&quot;</span><span class="s2">&quot;</span><span class="p">);</span></div><div class='line' id='LC832'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC833'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// If 4th character is a space, we are done reading, break the loop, micro-optimisation over strlen</span></div><div class='line' id='LC834'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">((</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$str</span><span class="p">[</span><span class="mi">3</span><span class="p">])</span> <span class="k">and</span> <span class="nv">$str</span><span class="p">[</span><span class="mi">3</span><span class="p">]</span> <span class="o">==</span> <span class="s1">&#39; &#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC835'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC836'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC837'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Timed-out? Log and break</span></div><div class='line' id='LC838'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$info</span> <span class="o">=</span> <span class="nb">stream_get_meta_data</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">smtp_conn</span><span class="p">);</span></div><div class='line' id='LC839'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$info</span><span class="p">[</span><span class="s1">&#39;timed_out&#39;</span><span class="p">])</span> <span class="p">{</span></div><div class='line' id='LC840'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">4</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC841'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span></div><div class='line' id='LC842'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;SMTP -&gt; get_lines(): timed-out (&#39;</span> <span class="o">.</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timeout</span> <span class="o">.</span> <span class="s1">&#39; sec)&#39;</span></div><div class='line' id='LC843'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC844'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC845'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC846'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC847'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Now check if reads took too long</span></div><div class='line' id='LC848'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$endtime</span> <span class="k">and</span> <span class="nb">time</span><span class="p">()</span> <span class="o">&gt;</span> <span class="nv">$endtime</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC849'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">&gt;=</span> <span class="mi">4</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC850'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">edebug</span><span class="p">(</span></div><div class='line' id='LC851'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;SMTP -&gt; get_lines(): timelimit reached (&#39;</span><span class="o">.</span></div><div class='line' id='LC852'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timelimit</span> <span class="o">.</span> <span class="s1">&#39; sec)&#39;</span></div><div class='line' id='LC853'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC854'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC855'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC856'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC857'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC858'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$data</span><span class="p">;</span></div><div class='line' id='LC859'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC860'><br/></div><div class='line' id='LC861'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC862'><span class="sd">     * Enable or disable VERP address generation.</span></div><div class='line' id='LC863'><span class="sd">     * @param bool $enabled</span></div><div class='line' id='LC864'><span class="sd">     */</span></div><div class='line' id='LC865'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setVerp</span><span class="p">(</span><span class="nv">$enabled</span> <span class="o">=</span> <span class="k">false</span><span class="p">)</span></div><div class='line' id='LC866'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC867'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_verp</span> <span class="o">=</span> <span class="nv">$enabled</span><span class="p">;</span></div><div class='line' id='LC868'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC869'><br/></div><div class='line' id='LC870'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC871'><span class="sd">     * Get VERP address generation mode.</span></div><div class='line' id='LC872'><span class="sd">     * @return bool</span></div><div class='line' id='LC873'><span class="sd">     */</span></div><div class='line' id='LC874'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getVerp</span><span class="p">()</span></div><div class='line' id='LC875'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC876'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_verp</span><span class="p">;</span></div><div class='line' id='LC877'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC878'><br/></div><div class='line' id='LC879'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC880'><span class="sd">     * Set debug output method.</span></div><div class='line' id='LC881'><span class="sd">     * @param string $method The function/method to use for debugging output.</span></div><div class='line' id='LC882'><span class="sd">     */</span></div><div class='line' id='LC883'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setDebugOutput</span><span class="p">(</span><span class="nv">$method</span> <span class="o">=</span> <span class="s1">&#39;echo&#39;</span><span class="p">)</span></div><div class='line' id='LC884'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC885'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Debugoutput</span> <span class="o">=</span> <span class="nv">$method</span><span class="p">;</span></div><div class='line' id='LC886'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC887'><br/></div><div class='line' id='LC888'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC889'><span class="sd">     * Get debug output method.</span></div><div class='line' id='LC890'><span class="sd">     * @return string</span></div><div class='line' id='LC891'><span class="sd">     */</span></div><div class='line' id='LC892'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getDebugOutput</span><span class="p">()</span></div><div class='line' id='LC893'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC894'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Debugoutput</span><span class="p">;</span></div><div class='line' id='LC895'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC896'><br/></div><div class='line' id='LC897'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC898'><span class="sd">     * Set debug output level.</span></div><div class='line' id='LC899'><span class="sd">     * @param int $level</span></div><div class='line' id='LC900'><span class="sd">     */</span></div><div class='line' id='LC901'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setDebugLevel</span><span class="p">(</span><span class="nv">$level</span> <span class="o">=</span> <span class="mi">0</span><span class="p">)</span></div><div class='line' id='LC902'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC903'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span> <span class="o">=</span> <span class="nv">$level</span><span class="p">;</span></div><div class='line' id='LC904'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC905'><br/></div><div class='line' id='LC906'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC907'><span class="sd">     * Get debug output level.</span></div><div class='line' id='LC908'><span class="sd">     * @return int</span></div><div class='line' id='LC909'><span class="sd">     */</span></div><div class='line' id='LC910'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getDebugLevel</span><span class="p">()</span></div><div class='line' id='LC911'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC912'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">do_debug</span><span class="p">;</span></div><div class='line' id='LC913'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC914'><br/></div><div class='line' id='LC915'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC916'><span class="sd">     * Set SMTP timeout.</span></div><div class='line' id='LC917'><span class="sd">     * @param int $timeout</span></div><div class='line' id='LC918'><span class="sd">     */</span></div><div class='line' id='LC919'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setTimeout</span><span class="p">(</span><span class="nv">$timeout</span> <span class="o">=</span> <span class="mi">0</span><span class="p">)</span></div><div class='line' id='LC920'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC921'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timeout</span> <span class="o">=</span> <span class="nv">$timeout</span><span class="p">;</span></div><div class='line' id='LC922'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC923'><br/></div><div class='line' id='LC924'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC925'><span class="sd">     * Get SMTP timeout.</span></div><div class='line' id='LC926'><span class="sd">     * @return int</span></div><div class='line' id='LC927'><span class="sd">     */</span></div><div class='line' id='LC928'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">getTimeout</span><span class="p">()</span></div><div class='line' id='LC929'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">{</span></div><div class='line' id='LC930'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">Timeout</span><span class="p">;</span></div><div class='line' id='LC931'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC932'><span class="p">}</span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.17665s from github-fe122-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>

