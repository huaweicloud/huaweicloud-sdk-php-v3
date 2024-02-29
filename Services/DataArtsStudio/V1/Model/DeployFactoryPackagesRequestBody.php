<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeployFactoryPackagesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeployFactoryPackagesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * packageIds  发布包ID
    * startupMode  发布后是否立即启动作业。取值范围为0和1，默认为1, 1：发布成功后立即启动作业 0：不立即启动
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'packageIds' => 'string[]',
            'startupMode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * packageIds  发布包ID
    * startupMode  发布后是否立即启动作业。取值范围为0和1，默认为1, 1：发布成功后立即启动作业 0：不立即启动
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'packageIds' => null,
        'startupMode' => 'int32'
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
    * packageIds  发布包ID
    * startupMode  发布后是否立即启动作业。取值范围为0和1，默认为1, 1：发布成功后立即启动作业 0：不立即启动
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'packageIds' => 'package_ids',
            'startupMode' => 'startup_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * packageIds  发布包ID
    * startupMode  发布后是否立即启动作业。取值范围为0和1，默认为1, 1：发布成功后立即启动作业 0：不立即启动
    *
    * @var string[]
    */
    protected static $setters = [
            'packageIds' => 'setPackageIds',
            'startupMode' => 'setStartupMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * packageIds  发布包ID
    * startupMode  发布后是否立即启动作业。取值范围为0和1，默认为1, 1：发布成功后立即启动作业 0：不立即启动
    *
    * @var string[]
    */
    protected static $getters = [
            'packageIds' => 'getPackageIds',
            'startupMode' => 'getStartupMode'
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
        $this->container['packageIds'] = isset($data['packageIds']) ? $data['packageIds'] : null;
        $this->container['startupMode'] = isset($data['startupMode']) ? $data['startupMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['packageIds'] === null) {
            $invalidProperties[] = "'packageIds' can't be null";
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
    * Gets packageIds
    *  发布包ID
    *
    * @return string[]
    */
    public function getPackageIds()
    {
        return $this->container['packageIds'];
    }

    /**
    * Sets packageIds
    *
    * @param string[] $packageIds 发布包ID
    *
    * @return $this
    */
    public function setPackageIds($packageIds)
    {
        $this->container['packageIds'] = $packageIds;
        return $this;
    }

    /**
    * Gets startupMode
    *  发布后是否立即启动作业。取值范围为0和1，默认为1, 1：发布成功后立即启动作业 0：不立即启动
    *
    * @return int|null
    */
    public function getStartupMode()
    {
        return $this->container['startupMode'];
    }

    /**
    * Sets startupMode
    *
    * @param int|null $startupMode 发布后是否立即启动作业。取值范围为0和1，默认为1, 1：发布成功后立即启动作业 0：不立即启动
    *
    * @return $this
    */
    public function setStartupMode($startupMode)
    {
        $this->container['startupMode'] = $startupMode;
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

