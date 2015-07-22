
<div class="tab-container">
  <div class="container">
    <div role="tabpanel">

      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation"@if(isset($page_active) && $page_active == 'background')) class="active"@endif>
          <a href="/background" aria-controls="home">Background</a>
          </li>
        <li role="presentation"@if(isset($page_active) && $page_active == 'criteria')) class="active"@endif>
          <a href="/criteria" aria-controls="criteria">Critera</a>
        </li>
        <li role="presentation"@if(isset($page_active) && $page_active == 'options')) class="active"@endif>
          <a href="#" aria-controls="options">Proposal</a>
        </li>
        <li role="presentation"@if(isset($page_active) && $page_active == 'feedback')) class="active"@endif>
          <a href="/feedback" aria-controls="feedback">Feedback</a>
        </li>
      </ul>

    </div><!-- tabpanel -->
  </div><!-- /.container -->
</div><!-- /.tab-container -->
