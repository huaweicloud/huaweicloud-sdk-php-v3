<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * useScene  使用场景。
    * sceneId  场景ID。
    * scenes  场景。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'useScene' => 'string',
            'sceneId' => 'string',
            'scenes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Scene[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * useScene  使用场景。
    * sceneId  场景ID。
    * scenes  场景。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'useScene' => null,
        'sceneId' => null,
        'scenes' => null
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
    * useScene  使用场景。
    * sceneId  场景ID。
    * scenes  场景。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'useScene' => 'use_scene',
            'sceneId' => 'scene_id',
            'scenes' => 'scenes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * useScene  使用场景。
    * sceneId  场景ID。
    * scenes  场景。
    *
    * @var string[]
    */
    protected static $setters = [
            'useScene' => 'setUseScene',
            'sceneId' => 'setSceneId',
            'scenes' => 'setScenes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * useScene  使用场景。
    * sceneId  场景ID。
    * scenes  场景。
    *
    * @var string[]
    */
    protected static $getters = [
            'useScene' => 'getUseScene',
            'sceneId' => 'getSceneId',
            'scenes' => 'getScenes'
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
        $this->container['useScene'] = isset($data['useScene']) ? $data['useScene'] : null;
        $this->container['sceneId'] = isset($data['sceneId']) ? $data['sceneId'] : null;
        $this->container['scenes'] = isset($data['scenes']) ? $data['scenes'] : null;
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
    * Gets useScene
    *  使用场景。
    *
    * @return string|null
    */
    public function getUseScene()
    {
        return $this->container['useScene'];
    }

    /**
    * Sets useScene
    *
    * @param string|null $useScene 使用场景。
    *
    * @return $this
    */
    public function setUseScene($useScene)
    {
        $this->container['useScene'] = $useScene;
        return $this;
    }

    /**
    * Gets sceneId
    *  场景ID。
    *
    * @return string|null
    */
    public function getSceneId()
    {
        return $this->container['sceneId'];
    }

    /**
    * Sets sceneId
    *
    * @param string|null $sceneId 场景ID。
    *
    * @return $this
    */
    public function setSceneId($sceneId)
    {
        $this->container['sceneId'] = $sceneId;
        return $this;
    }

    /**
    * Gets scenes
    *  场景。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Scene[]|null
    */
    public function getScenes()
    {
        return $this->container['scenes'];
    }

    /**
    * Sets scenes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Scene[]|null $scenes 场景。
    *
    * @return $this
    */
    public function setScenes($scenes)
    {
        $this->container['scenes'] = $scenes;
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

