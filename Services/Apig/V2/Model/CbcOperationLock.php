<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CbcOperationLock implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CbcOperationLock';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lockScene  限制操作场景： - TO_PERIOD_LOCK：按需转包周期场景锁，不允许进行删除、规格变更、按需转包周期等 - SPEC_CHG_LOCK：包周期规格变更场景锁，不允许进行删除、规格变更等
    * lockSourceId  发起限制操作对象的标志
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lockScene' => 'string',
            'lockSourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lockScene  限制操作场景： - TO_PERIOD_LOCK：按需转包周期场景锁，不允许进行删除、规格变更、按需转包周期等 - SPEC_CHG_LOCK：包周期规格变更场景锁，不允许进行删除、规格变更等
    * lockSourceId  发起限制操作对象的标志
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lockScene' => null,
        'lockSourceId' => null
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
    * lockScene  限制操作场景： - TO_PERIOD_LOCK：按需转包周期场景锁，不允许进行删除、规格变更、按需转包周期等 - SPEC_CHG_LOCK：包周期规格变更场景锁，不允许进行删除、规格变更等
    * lockSourceId  发起限制操作对象的标志
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lockScene' => 'lock_scene',
            'lockSourceId' => 'lock_source_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lockScene  限制操作场景： - TO_PERIOD_LOCK：按需转包周期场景锁，不允许进行删除、规格变更、按需转包周期等 - SPEC_CHG_LOCK：包周期规格变更场景锁，不允许进行删除、规格变更等
    * lockSourceId  发起限制操作对象的标志
    *
    * @var string[]
    */
    protected static $setters = [
            'lockScene' => 'setLockScene',
            'lockSourceId' => 'setLockSourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lockScene  限制操作场景： - TO_PERIOD_LOCK：按需转包周期场景锁，不允许进行删除、规格变更、按需转包周期等 - SPEC_CHG_LOCK：包周期规格变更场景锁，不允许进行删除、规格变更等
    * lockSourceId  发起限制操作对象的标志
    *
    * @var string[]
    */
    protected static $getters = [
            'lockScene' => 'getLockScene',
            'lockSourceId' => 'getLockSourceId'
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
    const LOCK_SCENE_TO_PERIOD_LOCK = 'TO_PERIOD_LOCK';
    const LOCK_SCENE_PEC_CHG_LOCK = 'PEC_CHG_LOCK';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLockSceneAllowableValues()
    {
        return [
            self::LOCK_SCENE_TO_PERIOD_LOCK,
            self::LOCK_SCENE_PEC_CHG_LOCK,
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
        $this->container['lockScene'] = isset($data['lockScene']) ? $data['lockScene'] : null;
        $this->container['lockSourceId'] = isset($data['lockSourceId']) ? $data['lockSourceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getLockSceneAllowableValues();
                if (!is_null($this->container['lockScene']) && !in_array($this->container['lockScene'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lockScene', must be one of '%s'",
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
    * Gets lockScene
    *  限制操作场景： - TO_PERIOD_LOCK：按需转包周期场景锁，不允许进行删除、规格变更、按需转包周期等 - SPEC_CHG_LOCK：包周期规格变更场景锁，不允许进行删除、规格变更等
    *
    * @return string|null
    */
    public function getLockScene()
    {
        return $this->container['lockScene'];
    }

    /**
    * Sets lockScene
    *
    * @param string|null $lockScene 限制操作场景： - TO_PERIOD_LOCK：按需转包周期场景锁，不允许进行删除、规格变更、按需转包周期等 - SPEC_CHG_LOCK：包周期规格变更场景锁，不允许进行删除、规格变更等
    *
    * @return $this
    */
    public function setLockScene($lockScene)
    {
        $this->container['lockScene'] = $lockScene;
        return $this;
    }

    /**
    * Gets lockSourceId
    *  发起限制操作对象的标志
    *
    * @return string|null
    */
    public function getLockSourceId()
    {
        return $this->container['lockSourceId'];
    }

    /**
    * Sets lockSourceId
    *
    * @param string|null $lockSourceId 发起限制操作对象的标志
    *
    * @return $this
    */
    public function setLockSourceId($lockSourceId)
    {
        $this->container['lockSourceId'] = $lockSourceId;
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

