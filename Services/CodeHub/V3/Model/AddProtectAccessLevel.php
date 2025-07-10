<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddProtectAccessLevel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddProtectAccessLevel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pushAccessLevel  提交权限 0:任何人不允许提交，30:开发者及管理员可提交，40:管理员可提交
    * mergeAccessLevel  合并权限 0:任何人不允许合并，30:开发者及管理员可合并，40:管理员可合并,合并权限必须大于等于提交权限
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pushAccessLevel' => 'int',
            'mergeAccessLevel' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pushAccessLevel  提交权限 0:任何人不允许提交，30:开发者及管理员可提交，40:管理员可提交
    * mergeAccessLevel  合并权限 0:任何人不允许合并，30:开发者及管理员可合并，40:管理员可合并,合并权限必须大于等于提交权限
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pushAccessLevel' => 'int32',
        'mergeAccessLevel' => 'int32'
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
    * pushAccessLevel  提交权限 0:任何人不允许提交，30:开发者及管理员可提交，40:管理员可提交
    * mergeAccessLevel  合并权限 0:任何人不允许合并，30:开发者及管理员可合并，40:管理员可合并,合并权限必须大于等于提交权限
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pushAccessLevel' => 'push_access_level',
            'mergeAccessLevel' => 'merge_access_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pushAccessLevel  提交权限 0:任何人不允许提交，30:开发者及管理员可提交，40:管理员可提交
    * mergeAccessLevel  合并权限 0:任何人不允许合并，30:开发者及管理员可合并，40:管理员可合并,合并权限必须大于等于提交权限
    *
    * @var string[]
    */
    protected static $setters = [
            'pushAccessLevel' => 'setPushAccessLevel',
            'mergeAccessLevel' => 'setMergeAccessLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pushAccessLevel  提交权限 0:任何人不允许提交，30:开发者及管理员可提交，40:管理员可提交
    * mergeAccessLevel  合并权限 0:任何人不允许合并，30:开发者及管理员可合并，40:管理员可合并,合并权限必须大于等于提交权限
    *
    * @var string[]
    */
    protected static $getters = [
            'pushAccessLevel' => 'getPushAccessLevel',
            'mergeAccessLevel' => 'getMergeAccessLevel'
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
    const PUSH_ACCESS_LEVEL_0 = 0;
    const PUSH_ACCESS_LEVEL_30 = 30;
    const PUSH_ACCESS_LEVEL_40 = 40;
    const MERGE_ACCESS_LEVEL_0 = 0;
    const MERGE_ACCESS_LEVEL_30 = 30;
    const MERGE_ACCESS_LEVEL_40 = 40;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPushAccessLevelAllowableValues()
    {
        return [
            self::PUSH_ACCESS_LEVEL_0,
            self::PUSH_ACCESS_LEVEL_30,
            self::PUSH_ACCESS_LEVEL_40,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMergeAccessLevelAllowableValues()
    {
        return [
            self::MERGE_ACCESS_LEVEL_0,
            self::MERGE_ACCESS_LEVEL_30,
            self::MERGE_ACCESS_LEVEL_40,
        ];
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
        $this->container['pushAccessLevel'] = isset($data['pushAccessLevel']) ? $data['pushAccessLevel'] : null;
        $this->container['mergeAccessLevel'] = isset($data['mergeAccessLevel']) ? $data['mergeAccessLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pushAccessLevel'] === null) {
            $invalidProperties[] = "'pushAccessLevel' can't be null";
        }
            $allowedValues = $this->getPushAccessLevelAllowableValues();
                if (!is_null($this->container['pushAccessLevel']) && !in_array($this->container['pushAccessLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'pushAccessLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['mergeAccessLevel'] === null) {
            $invalidProperties[] = "'mergeAccessLevel' can't be null";
        }
            $allowedValues = $this->getMergeAccessLevelAllowableValues();
                if (!is_null($this->container['mergeAccessLevel']) && !in_array($this->container['mergeAccessLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mergeAccessLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets pushAccessLevel
    *  提交权限 0:任何人不允许提交，30:开发者及管理员可提交，40:管理员可提交
    *
    * @return int
    */
    public function getPushAccessLevel()
    {
        return $this->container['pushAccessLevel'];
    }

    /**
    * Sets pushAccessLevel
    *
    * @param int $pushAccessLevel 提交权限 0:任何人不允许提交，30:开发者及管理员可提交，40:管理员可提交
    *
    * @return $this
    */
    public function setPushAccessLevel($pushAccessLevel)
    {
        $this->container['pushAccessLevel'] = $pushAccessLevel;
        return $this;
    }

    /**
    * Gets mergeAccessLevel
    *  合并权限 0:任何人不允许合并，30:开发者及管理员可合并，40:管理员可合并,合并权限必须大于等于提交权限
    *
    * @return int
    */
    public function getMergeAccessLevel()
    {
        return $this->container['mergeAccessLevel'];
    }

    /**
    * Sets mergeAccessLevel
    *
    * @param int $mergeAccessLevel 合并权限 0:任何人不允许合并，30:开发者及管理员可合并，40:管理员可合并,合并权限必须大于等于提交权限
    *
    * @return $this
    */
    public function setMergeAccessLevel($mergeAccessLevel)
    {
        $this->container['mergeAccessLevel'] = $mergeAccessLevel;
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

