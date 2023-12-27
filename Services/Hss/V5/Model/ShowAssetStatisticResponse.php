<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAssetStatisticResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAssetStatisticResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accountNum  账号数量
    * portNum  开放端口数量
    * processNum  进程数量
    * appNum  软件数量
    * autoLaunchNum  自启动数量
    * webFrameworkNum  web框架数量
    * webSiteNum  Web站点数量
    * jarPackageNum  Jar包数量
    * kernelModuleNum  内核模块数量
    * webServiceNum  web服务数量
    * webAppNum  web应用数量
    * databaseNum  数据库数量
    * coreConfFileNum  关键配置文件数量
    * environmentNum  环境变量数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accountNum' => 'int',
            'portNum' => 'int',
            'processNum' => 'int',
            'appNum' => 'int',
            'autoLaunchNum' => 'int',
            'webFrameworkNum' => 'int',
            'webSiteNum' => 'int',
            'jarPackageNum' => 'int',
            'kernelModuleNum' => 'int',
            'webServiceNum' => 'int',
            'webAppNum' => 'int',
            'databaseNum' => 'int',
            'coreConfFileNum' => 'int',
            'environmentNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accountNum  账号数量
    * portNum  开放端口数量
    * processNum  进程数量
    * appNum  软件数量
    * autoLaunchNum  自启动数量
    * webFrameworkNum  web框架数量
    * webSiteNum  Web站点数量
    * jarPackageNum  Jar包数量
    * kernelModuleNum  内核模块数量
    * webServiceNum  web服务数量
    * webAppNum  web应用数量
    * databaseNum  数据库数量
    * coreConfFileNum  关键配置文件数量
    * environmentNum  环境变量数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accountNum' => 'int64',
        'portNum' => 'int64',
        'processNum' => 'int64',
        'appNum' => 'int64',
        'autoLaunchNum' => 'int64',
        'webFrameworkNum' => 'int64',
        'webSiteNum' => 'int64',
        'jarPackageNum' => 'int64',
        'kernelModuleNum' => 'int64',
        'webServiceNum' => 'int64',
        'webAppNum' => 'int64',
        'databaseNum' => 'int64',
        'coreConfFileNum' => 'int64',
        'environmentNum' => 'int64'
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * accountNum  账号数量
    * portNum  开放端口数量
    * processNum  进程数量
    * appNum  软件数量
    * autoLaunchNum  自启动数量
    * webFrameworkNum  web框架数量
    * webSiteNum  Web站点数量
    * jarPackageNum  Jar包数量
    * kernelModuleNum  内核模块数量
    * webServiceNum  web服务数量
    * webAppNum  web应用数量
    * databaseNum  数据库数量
    * coreConfFileNum  关键配置文件数量
    * environmentNum  环境变量数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accountNum' => 'account_num',
            'portNum' => 'port_num',
            'processNum' => 'process_num',
            'appNum' => 'app_num',
            'autoLaunchNum' => 'auto_launch_num',
            'webFrameworkNum' => 'web_framework_num',
            'webSiteNum' => 'web_site_num',
            'jarPackageNum' => 'jar_package_num',
            'kernelModuleNum' => 'kernel_module_num',
            'webServiceNum' => 'web_service_num',
            'webAppNum' => 'web_app_num',
            'databaseNum' => 'database_num',
            'coreConfFileNum' => 'core_conf_file_num',
            'environmentNum' => 'environment_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accountNum  账号数量
    * portNum  开放端口数量
    * processNum  进程数量
    * appNum  软件数量
    * autoLaunchNum  自启动数量
    * webFrameworkNum  web框架数量
    * webSiteNum  Web站点数量
    * jarPackageNum  Jar包数量
    * kernelModuleNum  内核模块数量
    * webServiceNum  web服务数量
    * webAppNum  web应用数量
    * databaseNum  数据库数量
    * coreConfFileNum  关键配置文件数量
    * environmentNum  环境变量数量
    *
    * @var string[]
    */
    protected static $setters = [
            'accountNum' => 'setAccountNum',
            'portNum' => 'setPortNum',
            'processNum' => 'setProcessNum',
            'appNum' => 'setAppNum',
            'autoLaunchNum' => 'setAutoLaunchNum',
            'webFrameworkNum' => 'setWebFrameworkNum',
            'webSiteNum' => 'setWebSiteNum',
            'jarPackageNum' => 'setJarPackageNum',
            'kernelModuleNum' => 'setKernelModuleNum',
            'webServiceNum' => 'setWebServiceNum',
            'webAppNum' => 'setWebAppNum',
            'databaseNum' => 'setDatabaseNum',
            'coreConfFileNum' => 'setCoreConfFileNum',
            'environmentNum' => 'setEnvironmentNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accountNum  账号数量
    * portNum  开放端口数量
    * processNum  进程数量
    * appNum  软件数量
    * autoLaunchNum  自启动数量
    * webFrameworkNum  web框架数量
    * webSiteNum  Web站点数量
    * jarPackageNum  Jar包数量
    * kernelModuleNum  内核模块数量
    * webServiceNum  web服务数量
    * webAppNum  web应用数量
    * databaseNum  数据库数量
    * coreConfFileNum  关键配置文件数量
    * environmentNum  环境变量数量
    *
    * @var string[]
    */
    protected static $getters = [
            'accountNum' => 'getAccountNum',
            'portNum' => 'getPortNum',
            'processNum' => 'getProcessNum',
            'appNum' => 'getAppNum',
            'autoLaunchNum' => 'getAutoLaunchNum',
            'webFrameworkNum' => 'getWebFrameworkNum',
            'webSiteNum' => 'getWebSiteNum',
            'jarPackageNum' => 'getJarPackageNum',
            'kernelModuleNum' => 'getKernelModuleNum',
            'webServiceNum' => 'getWebServiceNum',
            'webAppNum' => 'getWebAppNum',
            'databaseNum' => 'getDatabaseNum',
            'coreConfFileNum' => 'getCoreConfFileNum',
            'environmentNum' => 'getEnvironmentNum'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['accountNum'] = isset($data['accountNum']) ? $data['accountNum'] : null;
        $this->container['portNum'] = isset($data['portNum']) ? $data['portNum'] : null;
        $this->container['processNum'] = isset($data['processNum']) ? $data['processNum'] : null;
        $this->container['appNum'] = isset($data['appNum']) ? $data['appNum'] : null;
        $this->container['autoLaunchNum'] = isset($data['autoLaunchNum']) ? $data['autoLaunchNum'] : null;
        $this->container['webFrameworkNum'] = isset($data['webFrameworkNum']) ? $data['webFrameworkNum'] : null;
        $this->container['webSiteNum'] = isset($data['webSiteNum']) ? $data['webSiteNum'] : null;
        $this->container['jarPackageNum'] = isset($data['jarPackageNum']) ? $data['jarPackageNum'] : null;
        $this->container['kernelModuleNum'] = isset($data['kernelModuleNum']) ? $data['kernelModuleNum'] : null;
        $this->container['webServiceNum'] = isset($data['webServiceNum']) ? $data['webServiceNum'] : null;
        $this->container['webAppNum'] = isset($data['webAppNum']) ? $data['webAppNum'] : null;
        $this->container['databaseNum'] = isset($data['databaseNum']) ? $data['databaseNum'] : null;
        $this->container['coreConfFileNum'] = isset($data['coreConfFileNum']) ? $data['coreConfFileNum'] : null;
        $this->container['environmentNum'] = isset($data['environmentNum']) ? $data['environmentNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['accountNum']) && ($this->container['accountNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accountNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accountNum']) && ($this->container['accountNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'accountNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['portNum']) && ($this->container['portNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'portNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['portNum']) && ($this->container['portNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'portNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['processNum']) && ($this->container['processNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'processNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['processNum']) && ($this->container['processNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'processNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appNum']) && ($this->container['appNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'appNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['appNum']) && ($this->container['appNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'appNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['autoLaunchNum']) && ($this->container['autoLaunchNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'autoLaunchNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['autoLaunchNum']) && ($this->container['autoLaunchNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'autoLaunchNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['webFrameworkNum']) && ($this->container['webFrameworkNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'webFrameworkNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['webFrameworkNum']) && ($this->container['webFrameworkNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'webFrameworkNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['webSiteNum']) && ($this->container['webSiteNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'webSiteNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['webSiteNum']) && ($this->container['webSiteNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'webSiteNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['jarPackageNum']) && ($this->container['jarPackageNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'jarPackageNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['jarPackageNum']) && ($this->container['jarPackageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'jarPackageNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['kernelModuleNum']) && ($this->container['kernelModuleNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'kernelModuleNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['kernelModuleNum']) && ($this->container['kernelModuleNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'kernelModuleNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['webServiceNum']) && ($this->container['webServiceNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'webServiceNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['webServiceNum']) && ($this->container['webServiceNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'webServiceNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['webAppNum']) && ($this->container['webAppNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'webAppNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['webAppNum']) && ($this->container['webAppNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'webAppNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['databaseNum']) && ($this->container['databaseNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'databaseNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['databaseNum']) && ($this->container['databaseNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'databaseNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['coreConfFileNum']) && ($this->container['coreConfFileNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'coreConfFileNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['coreConfFileNum']) && ($this->container['coreConfFileNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'coreConfFileNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['environmentNum']) && ($this->container['environmentNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'environmentNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['environmentNum']) && ($this->container['environmentNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'environmentNum', must be bigger than or equal to 0.";
            }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets accountNum
    *  账号数量
    *
    * @return int|null
    */
    public function getAccountNum()
    {
        return $this->container['accountNum'];
    }

    /**
    * Sets accountNum
    *
    * @param int|null $accountNum 账号数量
    *
    * @return $this
    */
    public function setAccountNum($accountNum)
    {
        $this->container['accountNum'] = $accountNum;
        return $this;
    }

    /**
    * Gets portNum
    *  开放端口数量
    *
    * @return int|null
    */
    public function getPortNum()
    {
        return $this->container['portNum'];
    }

    /**
    * Sets portNum
    *
    * @param int|null $portNum 开放端口数量
    *
    * @return $this
    */
    public function setPortNum($portNum)
    {
        $this->container['portNum'] = $portNum;
        return $this;
    }

    /**
    * Gets processNum
    *  进程数量
    *
    * @return int|null
    */
    public function getProcessNum()
    {
        return $this->container['processNum'];
    }

    /**
    * Sets processNum
    *
    * @param int|null $processNum 进程数量
    *
    * @return $this
    */
    public function setProcessNum($processNum)
    {
        $this->container['processNum'] = $processNum;
        return $this;
    }

    /**
    * Gets appNum
    *  软件数量
    *
    * @return int|null
    */
    public function getAppNum()
    {
        return $this->container['appNum'];
    }

    /**
    * Sets appNum
    *
    * @param int|null $appNum 软件数量
    *
    * @return $this
    */
    public function setAppNum($appNum)
    {
        $this->container['appNum'] = $appNum;
        return $this;
    }

    /**
    * Gets autoLaunchNum
    *  自启动数量
    *
    * @return int|null
    */
    public function getAutoLaunchNum()
    {
        return $this->container['autoLaunchNum'];
    }

    /**
    * Sets autoLaunchNum
    *
    * @param int|null $autoLaunchNum 自启动数量
    *
    * @return $this
    */
    public function setAutoLaunchNum($autoLaunchNum)
    {
        $this->container['autoLaunchNum'] = $autoLaunchNum;
        return $this;
    }

    /**
    * Gets webFrameworkNum
    *  web框架数量
    *
    * @return int|null
    */
    public function getWebFrameworkNum()
    {
        return $this->container['webFrameworkNum'];
    }

    /**
    * Sets webFrameworkNum
    *
    * @param int|null $webFrameworkNum web框架数量
    *
    * @return $this
    */
    public function setWebFrameworkNum($webFrameworkNum)
    {
        $this->container['webFrameworkNum'] = $webFrameworkNum;
        return $this;
    }

    /**
    * Gets webSiteNum
    *  Web站点数量
    *
    * @return int|null
    */
    public function getWebSiteNum()
    {
        return $this->container['webSiteNum'];
    }

    /**
    * Sets webSiteNum
    *
    * @param int|null $webSiteNum Web站点数量
    *
    * @return $this
    */
    public function setWebSiteNum($webSiteNum)
    {
        $this->container['webSiteNum'] = $webSiteNum;
        return $this;
    }

    /**
    * Gets jarPackageNum
    *  Jar包数量
    *
    * @return int|null
    */
    public function getJarPackageNum()
    {
        return $this->container['jarPackageNum'];
    }

    /**
    * Sets jarPackageNum
    *
    * @param int|null $jarPackageNum Jar包数量
    *
    * @return $this
    */
    public function setJarPackageNum($jarPackageNum)
    {
        $this->container['jarPackageNum'] = $jarPackageNum;
        return $this;
    }

    /**
    * Gets kernelModuleNum
    *  内核模块数量
    *
    * @return int|null
    */
    public function getKernelModuleNum()
    {
        return $this->container['kernelModuleNum'];
    }

    /**
    * Sets kernelModuleNum
    *
    * @param int|null $kernelModuleNum 内核模块数量
    *
    * @return $this
    */
    public function setKernelModuleNum($kernelModuleNum)
    {
        $this->container['kernelModuleNum'] = $kernelModuleNum;
        return $this;
    }

    /**
    * Gets webServiceNum
    *  web服务数量
    *
    * @return int|null
    */
    public function getWebServiceNum()
    {
        return $this->container['webServiceNum'];
    }

    /**
    * Sets webServiceNum
    *
    * @param int|null $webServiceNum web服务数量
    *
    * @return $this
    */
    public function setWebServiceNum($webServiceNum)
    {
        $this->container['webServiceNum'] = $webServiceNum;
        return $this;
    }

    /**
    * Gets webAppNum
    *  web应用数量
    *
    * @return int|null
    */
    public function getWebAppNum()
    {
        return $this->container['webAppNum'];
    }

    /**
    * Sets webAppNum
    *
    * @param int|null $webAppNum web应用数量
    *
    * @return $this
    */
    public function setWebAppNum($webAppNum)
    {
        $this->container['webAppNum'] = $webAppNum;
        return $this;
    }

    /**
    * Gets databaseNum
    *  数据库数量
    *
    * @return int|null
    */
    public function getDatabaseNum()
    {
        return $this->container['databaseNum'];
    }

    /**
    * Sets databaseNum
    *
    * @param int|null $databaseNum 数据库数量
    *
    * @return $this
    */
    public function setDatabaseNum($databaseNum)
    {
        $this->container['databaseNum'] = $databaseNum;
        return $this;
    }

    /**
    * Gets coreConfFileNum
    *  关键配置文件数量
    *
    * @return int|null
    */
    public function getCoreConfFileNum()
    {
        return $this->container['coreConfFileNum'];
    }

    /**
    * Sets coreConfFileNum
    *
    * @param int|null $coreConfFileNum 关键配置文件数量
    *
    * @return $this
    */
    public function setCoreConfFileNum($coreConfFileNum)
    {
        $this->container['coreConfFileNum'] = $coreConfFileNum;
        return $this;
    }

    /**
    * Gets environmentNum
    *  环境变量数量
    *
    * @return int|null
    */
    public function getEnvironmentNum()
    {
        return $this->container['environmentNum'];
    }

    /**
    * Sets environmentNum
    *
    * @param int|null $environmentNum 环境变量数量
    *
    * @return $this
    */
    public function setEnvironmentNum($environmentNum)
    {
        $this->container['environmentNum'] = $environmentNum;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

