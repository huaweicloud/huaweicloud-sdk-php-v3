<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LivePlayingScriptInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LivePlayingScriptInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptName  剧本名称
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * shootScripts  拍摄脚本列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptName' => 'string',
            'modelAssetId' => 'string',
            'shootScripts' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LivePlayingShootScriptItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptName  剧本名称
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * shootScripts  拍摄脚本列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptName' => null,
        'modelAssetId' => null,
        'shootScripts' => null
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
    * scriptName  剧本名称
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * shootScripts  拍摄脚本列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptName' => 'script_name',
            'modelAssetId' => 'model_asset_id',
            'shootScripts' => 'shoot_scripts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptName  剧本名称
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * shootScripts  拍摄脚本列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptName' => 'setScriptName',
            'modelAssetId' => 'setModelAssetId',
            'shootScripts' => 'setShootScripts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptName  剧本名称
    * modelAssetId  数字人模型资产ID，可以从资产库中查询。
    * shootScripts  拍摄脚本列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptName' => 'getScriptName',
            'modelAssetId' => 'getModelAssetId',
            'shootScripts' => 'getShootScripts'
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
        $this->container['scriptName'] = isset($data['scriptName']) ? $data['scriptName'] : null;
        $this->container['modelAssetId'] = isset($data['modelAssetId']) ? $data['modelAssetId'] : null;
        $this->container['shootScripts'] = isset($data['shootScripts']) ? $data['shootScripts'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scriptName']) && (mb_strlen($this->container['scriptName']) > 256)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['scriptName']) && (mb_strlen($this->container['scriptName']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modelAssetId']) && (mb_strlen($this->container['modelAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'modelAssetId', the character length must be bigger than or equal to 0.";
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
    * Gets scriptName
    *  剧本名称
    *
    * @return string|null
    */
    public function getScriptName()
    {
        return $this->container['scriptName'];
    }

    /**
    * Sets scriptName
    *
    * @param string|null $scriptName 剧本名称
    *
    * @return $this
    */
    public function setScriptName($scriptName)
    {
        $this->container['scriptName'] = $scriptName;
        return $this;
    }

    /**
    * Gets modelAssetId
    *  数字人模型资产ID，可以从资产库中查询。
    *
    * @return string|null
    */
    public function getModelAssetId()
    {
        return $this->container['modelAssetId'];
    }

    /**
    * Sets modelAssetId
    *
    * @param string|null $modelAssetId 数字人模型资产ID，可以从资产库中查询。
    *
    * @return $this
    */
    public function setModelAssetId($modelAssetId)
    {
        $this->container['modelAssetId'] = $modelAssetId;
        return $this;
    }

    /**
    * Gets shootScripts
    *  拍摄脚本列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LivePlayingShootScriptItem[]|null
    */
    public function getShootScripts()
    {
        return $this->container['shootScripts'];
    }

    /**
    * Sets shootScripts
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LivePlayingShootScriptItem[]|null $shootScripts 拍摄脚本列表。
    *
    * @return $this
    */
    public function setShootScripts($shootScripts)
    {
        $this->container['shootScripts'] = $shootScripts;
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

