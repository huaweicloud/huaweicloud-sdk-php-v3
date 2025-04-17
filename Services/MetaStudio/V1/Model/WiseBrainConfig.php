<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WiseBrainConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WiseBrainConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * roleId  角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'roleId' => 'string',
            'sisRegion' => 'int',
            'sisProjectId' => 'string',
            'enableHotWords' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * roleId  角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'roleId' => null,
        'sisRegion' => null,
        'sisProjectId' => null,
        'enableHotWords' => null
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
    * roleId  角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'roleId' => 'role_id',
            'sisRegion' => 'sis_region',
            'sisProjectId' => 'sis_project_id',
            'enableHotWords' => 'enable_hot_words'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * roleId  角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    *
    * @var string[]
    */
    protected static $setters = [
            'roleId' => 'setRoleId',
            'sisRegion' => 'setSisRegion',
            'sisProjectId' => 'setSisProjectId',
            'enableHotWords' => 'setEnableHotWords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * roleId  角色ID。
    * sisRegion  SIS所在区域
    * sisProjectId  SIS所在区域的projectId
    * enableHotWords  是否开启热词
    *
    * @var string[]
    */
    protected static $getters = [
            'roleId' => 'getRoleId',
            'sisRegion' => 'getSisRegion',
            'sisProjectId' => 'getSisProjectId',
            'enableHotWords' => 'getEnableHotWords'
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
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['sisRegion'] = isset($data['sisRegion']) ? $data['sisRegion'] : null;
        $this->container['sisProjectId'] = isset($data['sisProjectId']) ? $data['sisProjectId'] : null;
        $this->container['enableHotWords'] = isset($data['enableHotWords']) ? $data['enableHotWords'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['roleId']) && (mb_strlen($this->container['roleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sisRegion']) && ($this->container['sisRegion'] > 32)) {
                $invalidProperties[] = "invalid value for 'sisRegion', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sisRegion']) && ($this->container['sisRegion'] < 0)) {
                $invalidProperties[] = "invalid value for 'sisRegion', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sisProjectId']) && (mb_strlen($this->container['sisProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'sisProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets roleId
    *  角色ID。
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId 角色ID。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets sisRegion
    *  SIS所在区域
    *
    * @return int|null
    */
    public function getSisRegion()
    {
        return $this->container['sisRegion'];
    }

    /**
    * Sets sisRegion
    *
    * @param int|null $sisRegion SIS所在区域
    *
    * @return $this
    */
    public function setSisRegion($sisRegion)
    {
        $this->container['sisRegion'] = $sisRegion;
        return $this;
    }

    /**
    * Gets sisProjectId
    *  SIS所在区域的projectId
    *
    * @return string|null
    */
    public function getSisProjectId()
    {
        return $this->container['sisProjectId'];
    }

    /**
    * Sets sisProjectId
    *
    * @param string|null $sisProjectId SIS所在区域的projectId
    *
    * @return $this
    */
    public function setSisProjectId($sisProjectId)
    {
        $this->container['sisProjectId'] = $sisProjectId;
        return $this;
    }

    /**
    * Gets enableHotWords
    *  是否开启热词
    *
    * @return bool|null
    */
    public function getEnableHotWords()
    {
        return $this->container['enableHotWords'];
    }

    /**
    * Sets enableHotWords
    *
    * @param bool|null $enableHotWords 是否开启热词
    *
    * @return $this
    */
    public function setEnableHotWords($enableHotWords)
    {
        $this->container['enableHotWords'] = $enableHotWords;
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

