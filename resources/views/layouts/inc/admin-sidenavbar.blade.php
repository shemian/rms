<nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          Property<span>MS</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          
          <!-- Tenants -->
          <li class="nav-item nav-category">Components</li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tenants" role="button" aria-expanded="false" aria-controls="tenants">
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Tenants</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="tenants">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{route('tenant-create') }}" class="nav-link">Register Tenants</a>
                </li>
                <li class="nav-item">
                  <a href="{{route('tenant-index') }}" class="nav-link">View Tenants</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- landlords -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#landlords" role="button" aria-expanded="false" aria-controls="landlords">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Landlords</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="landlords">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('landlord-create')}}" class="nav-link">Register Landlords</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('landlord-index')}}" class="nav-link">View Landlords</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- properties -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#properties" role="button" aria-expanded="false" aria-controls="properties">
              <i class="link-icon" data-feather="home"></i>
              <span class="link-title">Properties</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="properties">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Create  Properties</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">View Properties</a>
                </li>
              </ul>
            </div>
          </li>
<!-- 
          propertyunits -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#propertyunits" role="button" aria-expanded="false" aria-controls="propertunits">
              <i class="link-icon" data-feather="home"></i>
              <span class="link-title">Property Units</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="propertyunits">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Create Property Units</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">View Property Units</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- lease/tenancy -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#lease" role="button" aria-expanded="false" aria-controls="lease">
              <i class="link-icon" data-feather="bell"></i>
              <span class="link-title">Leases/Tenancy</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="lease">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Create Lease</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Show Lease</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Expiring Lease</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Terminated Lease</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- inventory -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#inventory" role="button" aria-expanded="false" aria-controls="inventory">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Inventory</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="inventory">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Add Inventory</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">View Inventory</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- billings -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#billings" role="button" aria-expanded="false" aria-controls="billings">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Billings</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="billings">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Meter Readings</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Billings</a>
                </li>
              </ul>
            </div>
          </li>
          <!-- invoices -->
          <li class="nav-item">
              <a href="#" class="nav-link">Invoice</a>
          </li>

          <!-- payments -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#payments" role="button" aria-expanded="false" aria-controls="inventory">
              <i class="link-icon" data-feather="dollar-sign"></i>
              <span class="link-title">Payments</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="payments">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Show Payments</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Show Receipts</a>
                </li>
              </ul>
            </div>
          </li>

          <!-- Reports -->
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#reports" role="button" aria-expanded="false" aria-controls="inventory">
              <i class="link-icon" data-feather="book-open"></i>
              <span class="link-title">Reports</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="inventory">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="#" class="nav-link">Deposits</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Monthly Collection Report</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Unpaid Invoices</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Propery Balance</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">Receipt Report</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="user-plus"></i>
              <span class="link-title">Manage Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.nobleui.com/html/documentation/docs.html" target="_blank" class="nav-link">
              <i class="link-icon" data-feather="settings"></i>
              <span class="link-title">Application Settings</span>
            </a>
          </li>


  
          
        
          
     
        </ul>
      </div>
    </nav>