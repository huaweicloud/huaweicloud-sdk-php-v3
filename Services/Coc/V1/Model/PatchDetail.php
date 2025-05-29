<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PatchDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PatchDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * installedTime  安装时间
    * patchBaselineId  补丁基线id
    * patchBaselineName  补丁基线名称
    * patchStatus  补丁状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'installedTime' => 'int',
            'patchBaselineId' => 'string',
            'patchBaselineName' => 'string',
            'patchStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * installedTime  安装时间
    * patchBaselineId  补丁基线id
    * patchBaselineName  补丁基线名称
    * patchStatus  补丁状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'installedTime' => 'int64',
        'patchBaselineId' => null,
        'patchBaselineName' => null,
        'patchStatus' => null
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
    * installedTime  安装时间
    * patchBaselineId  补丁基线id
    * patchBaselineName  补丁基线名称
    * patchStatus  补丁状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'installedTime' => 'installed_time',
            'patchBaselineId' => 'patch_baseline_id',
            'patchBaselineName' => 'patch_baseline_name',
            'patchStatus' => 'patch_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * installedTime  安装时间
    * patchBaselineId  补丁基线id
    * patchBaselineName  补丁基线名称
    * patchStatus  补丁状态
    *
    * @var string[]
    */
    protected static $setters = [
            'installedTime' => 'setInstalledTime',
            'patchBaselineId' => 'setPatchBaselineId',
            'patchBaselineName' => 'setPatchBaselineName',
            'patchStatus' => 'setPatchStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * installedTime  安装时间
    * patchBaselineId  补丁基线id
    * patchBaselineName  补丁基线名称
    * patchStatus  补丁状态
    *
    * @var string[]
    */
    protected static $getters = [
            'installedTime' => 'getInstalledTime',
            'patchBaselineId' => 'getPatchBaselineId',
            'patchBaselineName' => 'getPatchBaselineName',
            'patchStatus' => 'getPatchStatus'
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
        $this->container['installedTime'] = isset($data['installedTime']) ? $data['installedTime'] : null;
        $this->container['patchBaselineId'] = isset($data['patchBaselineId']) ? $data['patchBaselineId'] : null;
        $this->container['patchBaselineName'] = isset($data['patchBaselineName']) ? $data['patchBaselineName'] : null;
        $this->container['patchStatus'] = isset($data['patchStatus']) ? $data['patchStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets installedTime
    *  安装时间
    *
    * @return int|null
    */
    public function getInstalledTime()
    {
        return $this->container['installedTime'];
    }

    /**
    * Sets installedTime
    *
    * @param int|null $installedTime 安装时间
    *
    * @return $this
    */
    public function setInstalledTime($installedTime)
    {
        $this->container['installedTime'] = $installedTime;
        return $this;
    }

    /**
    * Gets patchBaselineId
    *  补丁基线id
    *
    * @return string|null
    */
    public function getPatchBaselineId()
    {
        return $this->container['patchBaselineId'];
    }

    /**
    * Sets patchBaselineId
    *
    * @param string|null $patchBaselineId 补丁基线id
    *
    * @return $this
    */
    public function setPatchBaselineId($patchBaselineId)
    {
        $this->container['patchBaselineId'] = $patchBaselineId;
        return $this;
    }

    /**
    * Gets patchBaselineName
    *  补丁基线名称
    *
    * @return string|null
    */
    public function getPatchBaselineName()
    {
        return $this->container['patchBaselineName'];
    }

    /**
    * Sets patchBaselineName
    *
    * @param string|null $patchBaselineName 补丁基线名称
    *
    * @return $this
    */
    public function setPatchBaselineName($patchBaselineName)
    {
        $this->container['patchBaselineName'] = $patchBaselineName;
        return $this;
    }

    /**
    * Gets patchStatus
    *  补丁状态
    *
    * @return string|null
    */
    public function getPatchStatus()
    {
        return $this->container['patchStatus'];
    }

    /**
    * Sets patchStatus
    *
    * @param string|null $patchStatus 补丁状态
    *
    * @return $this
    */
    public function setPatchStatus($patchStatus)
    {
        $this->container['patchStatus'] = $patchStatus;
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

