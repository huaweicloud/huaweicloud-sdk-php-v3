<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHostAppsResponseInfoPaths implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHostAppsResponseInfo_paths';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appPath  **参数解释**: 存在漏洞的软件路径 **取值范围**: 字符长度1-512位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appPath' => 'string',
            'appVersion' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appPath  **参数解释**: 存在漏洞的软件路径 **取值范围**: 字符长度1-512位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appPath' => null,
        'appVersion' => null,
        'status' => null
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
    * appPath  **参数解释**: 存在漏洞的软件路径 **取值范围**: 字符长度1-512位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appPath' => 'app_path',
            'appVersion' => 'app_version',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appPath  **参数解释**: 存在漏洞的软件路径 **取值范围**: 字符长度1-512位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    *
    * @var string[]
    */
    protected static $setters = [
            'appPath' => 'setAppPath',
            'appVersion' => 'setAppVersion',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appPath  **参数解释**: 存在漏洞的软件路径 **取值范围**: 字符长度1-512位
    * appVersion  **参数解释**: 软件版本 **取值范围**: 字符长度1-64位
    * status  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    *
    * @var string[]
    */
    protected static $getters = [
            'appPath' => 'getAppPath',
            'appVersion' => 'getAppVersion',
            'status' => 'getStatus'
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
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) < 1)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^vul_status_unfix|vul_status_ignored|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^vul_status_unfix|vul_status_ignored|vul_status_verified|vul_status_fixing|vul_status_fixed|vul_status_reboot|vul_status_failed|vul_status_fix_after_reboot$/.";
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
    * Gets appPath
    *  **参数解释**: 存在漏洞的软件路径 **取值范围**: 字符长度1-512位
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
    * @param string|null $appPath **参数解释**: 存在漏洞的软件路径 **取值范围**: 字符长度1-512位
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
        return $this;
    }

    /**
    * Gets appVersion
    *  **参数解释**: 软件版本 **取值范围**: 字符长度1-64位
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
    * @param string|null $appVersion **参数解释**: 软件版本 **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**: 漏洞状态 **取值范围**: - vul_status_unfix：未处理 - vul_status_ignored：已忽略 - vul_status_verified：验证中 - vul_status_fixing：修复中 - vul_status_fixed：修复成功 - vul_status_reboot：修复成功待重启 - vul_status_failed：修复失败 - vul_status_fix_after_reboot：请重启主机再次修复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

