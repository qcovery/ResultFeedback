# ResultFeedback
This module adds an enhanced feedback form that can be configured via config file.

## Usage
Integrate the module in the `modules` directory of VuFind and activate it by adding `ResultFeedback` to `VUFIND_LOCAL_MODULES`.  
When adding the module manually make sure to copy and adapt the config file and copy/symlink the theme.

Add the following line to your template to link to the feedback form:
```php
<a href="<?=$this->url('resultfeedback-email').'?id='.$this->driver->getUniqueId().'&searchclassid='.$this->searchClassId?>">Contact us about this title</a>
```

