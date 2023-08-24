<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostVulInfoAppList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostVulInfo_app_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  软件名称
    * appVersion  软件版本
    * upgradeVersion  修复漏洞软件需要升级到的版本
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'appVersion' => 'string',
            'upgradeVersion' => 'string',
            'appPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  软件名称
    * appVersion  软件版本
    * upgradeVersion  修复漏洞软件需要升级到的版本
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'appVersion' => null,
        'upgradeVersion' => null,
        'appPath' => null
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
    * appName  软件名称
    * appVersion  软件版本
    * upgradeVersion  修复漏洞软件需要升级到的版本
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'appVersion' => 'app_version',
            'upgradeVersion' => 'upgrade_version',
            'appPath' => 'app_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  软件名称
    * appVersion  软件版本
    * upgradeVersion  修复漏洞软件需要升级到的版本
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'appVersion' => 'setAppVersion',
            'upgradeVersion' => 'setUpgradeVersion',
            'appPath' => 'setAppPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  软件名称
    * appVersion  软件版本
    * upgradeVersion  修复漏洞软件需要升级到的版本
    * appPath  应用软件的路径（只有应用漏洞有该字段）
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'appVersion' => 'getAppVersion',
            'upgradeVersion' => 'getUpgradeVersion',
            'appPath' => 'getAppPath'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['upgradeVersion'] = isset($data['upgradeVersion']) ? $data['upgradeVersion'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 256)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['upgradeVersion']) && (mb_strlen($this->container['upgradeVersion']) > 256)) {
                $invalidProperties[] = "invalid value for 'upgradeVersion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['upgradeVersion']) && (mb_strlen($this->container['upgradeVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'upgradeVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be bigger than or equal to 1.";
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
    * Gets appName
    *  软件名称
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName 软件名称
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appVersion
    *  软件版本
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion 软件版本
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets upgradeVersion
    *  修复漏洞软件需要升级到的版本
    *
    * @return string|null
    */
    public function getUpgradeVersion()
    {
        return $this->container['upgradeVersion'];
    }

    /**
    * Sets upgradeVersion
    *
    * @param string|null $upgradeVersion 修复漏洞软件需要升级到的版本
    *
    * @return $this
    */
    public function setUpgradeVersion($upgradeVersion)
    {
        $this->container['upgradeVersion'] = $upgradeVersion;
        return $this;
    }

    /**
    * Gets appPath
    *  应用软件的路径（只有应用漏洞有该字段）
    *
    * @return string|null
    */
    public function getAppPath()
    {
        return $this->container['appPath'];
    }

    /**
    * Sets appPath
    *
    * @param string|null $appPath 应用软件的路径（只有应用漏洞有该字段）
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
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

