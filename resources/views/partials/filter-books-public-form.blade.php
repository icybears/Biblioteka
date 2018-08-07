 <div class="component">
     <form class="row" id="search" action="{{ url('/library/search') }}">
            <div class="col s10 offset-s1 valign-wrapper center-align" >
                        <div class="input-field col m4 offset-m3">
                                    <input placeholder="Search by Title or by Author" id="search" type="search" name="search" value="{{ request('search') }}" required>
                                    <label for="search">Search library</label>
                                
                            </div>
        
                      <div class=" col m2 pull-m3">
                                <button class="btn waves-effect waves-light " type="button" onclick="submitForm(this)" >
                                    Search
                                </button>
                      </div>   
            </div>
     </form>
     <form  class="row" id="filter" action="{{ url('/library/filter') }}" method="">
              <div class="col s12 valign-wrapper center-align">
                    <div class="col s12 m7 hide-on-small-only">
                                <input name="filterby" type="radio" id="recent" value="recent" class="with-gap" {{ (request('filterby') == 'recent') ? 'checked' : null }} {{ !request('filterby') ? 'checked' : null }}/>
                                <label for="recent" value="recent">Recently Added</label>
                
                                <input name="filterby" type="radio" id="oldest" value="oldest" class="with-gap" {{ (request('filterby') == 'oldest') ? 'checked'  : null }}/>
                                <label for="oldest">Oldest Added</label>
                                <span>&nbsp;&nbsp;</span>            
                                <input name="filterby" type="radio" id="bypages" class="with-gap" value="bypages" {{ (request('filterby') == 'bypages') ? 'checked'  : null }}/>
                                <label for="bypages">By Pages</label>
                                <input type="hidden" name="search" value="{{ request('search') }}">
                    </div>
                
                               
                    <div class="col s12 m3">
                            <select name="language" id="language">
                                <option value="" disabled selected>Filter by Language</option>
                                <option value="English" {{ (request('language') == 'English') ? 'selected'  : null }}>English</option>
                                <option value="French" {{ (request('language') == 'French') ? 'selected'  : null }}>French</option>
                                <option value="German" {{ (request('language') == 'German') ? 'selected'  : null }}>German</option>
                                <option value="Russian" {{ (request('language') == 'Russian') ? 'selected'  : null }}>Russian</option>
                                <option value="Spanish" {{ (request('language') == 'Spanish') ? 'selected'  : null }}>Spanish</option>
                                <option value="Greek" {{ (request('language') == 'Greek') ? 'selected'  : null }}>Greek</option>
                                <option value="Italian" {{ (request('language') == 'Italian') ? 'selected'  : null }}>Italian</option>
                                <option value="Sanskrit" {{ (request('language') == 'Sanskrit') ? 'selected'  : null }}>Sanskrit</option>
                                <option value="Arabic" {{ (request('language') == 'Arabic') ? 'selected'  : null }}>Arabic</option>
                                <option value="Portuguese" {{ (request('language') == 'Portuguese') ? 'selected'  : null }}>Portuguese</option>
                                <option value="Norwegian" {{ (request('language') == 'Norwegian') ? 'selected'  : null }}>Norwegian</option>
                                <option value="Japanese" {{ (request('language') == 'Japanese') ? 'selected'  : null }}>Japanese</option>
                                <option value="Persian" {{ (request('language') == 'Persian') ? 'selected'  : null }}>Persian</option>
                                <option value="Classical Latin" {{ (request('language') == 'Classical Latin') ? 'selected'  : null }}>Classical Latin</option>  
                            </select>
                            <label for="language">Language</label>
                    </div>
                    <div class="col s12 m2 ">
                        <button class="btn waves-effect waves-light" type="button" onclick="submitForm(this)">
                                    Filter
                        </button>
                    </div>
     
              </div>
              
            </form>
 </div>