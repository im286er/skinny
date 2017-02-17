<?php
/**
 * update.php
 *
 * */

class lib_command_set_update implements lib_command_interface{
    
    public function commandTitle()
    {
        return '更新应用';
    }
    
    public function commandExplain()
    {
        return 'update AllList';
    }
    
    public function handle(array $args = [])
    {
        $appList = app::getAppList();
        if(! $appList)
        {
            throw new RuntimeException ('Application no  found');
        }
        
        foreach ($appList as $appName)
        {
            $app = app::get($appName);
            $table = new lib_database_dbtable_table($app);
            $table->update();
        }
        
        consoleColor::outputText('Applications database is up-to-date, ok.', 'success');
    }
    
    
}
