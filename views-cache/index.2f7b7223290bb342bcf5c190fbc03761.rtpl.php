<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!--INI MENU SUPERIOR-->  
  <div class="content-w">
    <ul class="breadcrumb">
      <li class="breadcrumb-item">
        <span>Olá usuário seja bem vindo ao seu controle de vendas !</span>
      </li>
    </ul>
    <div class="content-panel-toggler">
      <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
    </div>
    <div class="content-i">
      <div class="content-box">
        <div class="row">
          <div class="col-sm-12">
            <div class="element-wrapper">
              <h6 class="element-header">
                Paínel
              </h6>
              <div class="element-content">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="element-box el-tablo">
                      <div class="label">
                        Minha meta
                      </div>
                      <div class="valor-azul">
                        100%
                      </div>
                      <div class="trending trending-right-basic">
                        <span>R$ 10.000,00 </span><i class="os-icon os-icon-bar-chart-stats-up"></i>
                      </div>
                    </div>
                  </div>                          
                  <div class="col-sm-4">
                    <div class="element-box el-tablo">
                      <div class="label">
                        Meta alcançada
                      </div>
                      <div class="valor-verde">
                        50%
                      </div>
                      <div class="trending trending-up-basic">
                        <span>R$ 5.000,00 </span><i class="os-icon os-icon-bar-chart-stats-up"></i>
                      </div>
                    </div>
                  </div>                           
                  <div class="col-sm-4">
                    <div class="element-box el-tablo">
                      <div class="label">
                        Meta faltante
                      </div>
                      <div class="valor-vermelho">
                        50%
                      </div>
                      <div class="trending trending-down-basic">
                        <span>R$ 5.000,00 </span><i class="os-icon os-icon-bar-chart-stats-up"></i>
                      </div>
                    </div>
                  </div>                           
                    
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--- GRAFICO
        <div class="row">
          <div class="col-sm-12">
            <div class="element-wrapper">
              <h6 class="element-header">
                Vendas
              </h6>
              <div class="element-box">
                <div class="os-tabs-w">
                  <div class="os-tabs-controls">
                    <ul class="nav nav-tabs smaller">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tab_overview">Overview</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tab_sales">Sales</a>
                      </li>
                    </ul>
                    <ul class="nav nav-pills smaller hidden-sm-down">
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#">Today</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#">7 Days</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#">14 Days</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#">Last Month</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_overview">
                      <div class="el-tablo">
                        <div class="label">
                          Unique Visitors
                        </div>
                        <div class="value">
                          12,537
                        </div>
                      </div>
                      <div class="el-chart-w">
                        <canvas height="150px" id="lineChart" width="600px"></canvas>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_sales"></div>
                    <div class="tab-pane" id="tab_conversion"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --->
        <div class="row">
          <div class="col-sm-12">
            <div class="element-wrapper">
              <h6 class="element-header">
                Lista de atividades
              </h6>
              <div class="element-wrapper">
                  <div class="element-box">
                      <h5 class="form-header">
                          Painel de atividades do dia
                      </h5>
                      <div class="form-desc">Todos os dias aparecerá empresas para possíveis ligações e negociações.</div>
                      <div class="table-responsive">
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                      <!--<th>Logo</th>-->
                                      <th>Nome da empresa</th>
                                      <th>Endereço</th>
                                      <th>Cidade</th>
                                      <th>Fone</th>
                                      <th>Site</th>
                                      <th class="text-center">
                                          Status
                                      </th>
                                      <th>View</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <!--<td class="text-center">
                                          <img alt="" src="../site/resources/img/logo.png" width="25px">
                                      </td>-->
                                      <td>Hospital São João Silas</td>
                                      <td>Rua São José do mar verde, 3567, Alphaville</td>
                                      <td>Barueri</td>
                                      <td>41983675</td>
                                      <td class="text-center"><a href="saojoaopilas.com.br">saojoaopilas.com.br</a></td>
                                      <td class="text-center">
                                          <div class="status-pill green" data-title="Baixado" data-toggle="tooltip"></div>
                                      </td>
                                      <td class="text-center"><a href="#"><i class="dripicons-preview"></i></a></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-panel">
        <div class="content-panel-close">
          <i class="os-icon os-icon-close"></i>
        </div>
        <div class="element-wrapper">
          <h6 class="element-header">
            Acesso rápido
          </h6>
          <div class="element-box-tp">
            <div class="el-buttons-list full-width">
              <a class="btn btn-white btn-sm" href="#">
                  <i class="os-icon os-icon-tasks-checked"></i><span>visualizar boletos</span>
              </a>
              <a class="btn btn-white btn-sm" href="#">
                  <i class="os-icon os-icon-bar-chart-stats-up"></i><span>bonus de vendas</span>
              </a>
              <a class="btn btn-white btn-sm" href="#">
                  <i class="os-icon os-icon-calendar-time"></i><span>solicitações</span>
              </a>
            </div>
          </div>
        </div>
        <div class="element-wrapper">
          <h6 class="element-header">
            Info. rápidas
          </h6>
          <div class="element-box-tp">
            <div class="profile-tile">
              <div class="profile-tile-box">
                <div class="pt-avatar-w">
                  <i class="dripicons-cart"></i>
                </div>
                <div class="pt-user-name">
                  Clientes
                </div>
              </div>
              <div class="profile-tile-meta">
                <ul>
                  <li>
                    vendas:<strong>1459</strong>
                  </li>
                  <li>
                    Lider vendas:<strong>Robson Mendes</strong>
                  </li>
                </ul>
                <div class="pt-btn">
                  <a class="btn btn-primary btn-sm" href="#">clientes</a>
                </div>
              </div>
            </div>
            <div class="profile-tile">
              <div class="profile-tile-box">
                <div class="pt-avatar-w">
                  <i class="dripicons-list"></i>
                </div>
                <div class="pt-user-name">
                  Produtos
                </div>
              </div>
              <div class="profile-tile-meta">
                <ul>
                  <li>
                    Produtos:<strong>7986</strong>
                  </li>
                  <li>
                    Maior saida:<strong>Nome do produto</strong>
                  </li>
                </ul>
                <div class="pt-btn">
                  <a class="btn btn-primary btn-sm" href="#">produtos</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>