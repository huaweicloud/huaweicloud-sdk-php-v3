<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackgroundMusicConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackgroundMusicConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * musicAssetId  音乐资产ID，可以从资产库中查询。
    * volume  音乐音量。如100，表示音量100%，50表示音量50%。  默认值100，最小值0，最大值100。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'musicAssetId' => 'string',
            'volume' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * musicAssetId  音乐资产ID，可以从资产库中查询。
    * volume  音乐音量。如100，表示音量100%，50表示音量50%。  默认值100，最小值0，最大值100。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'musicAssetId' => null,
        'volume' => 'int32'
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
    * musicAssetId  音乐资产ID，可以从资产库中查询。
    * volume  音乐音量。如100，表示音量100%，50表示音量50%。  默认值100，最小值0，最大值100。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'musicAssetId' => 'music_asset_id',
            'volume' => 'volume'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * musicAssetId  音乐资产ID，可以从资产库中查询。
    * volume  音乐音量。如100，表示音量100%，50表示音量50%。  默认值100，最小值0，最大值100。
    *
    * @var string[]
    */
    protected static $setters = [
            'musicAssetId' => 'setMusicAssetId',
            'volume' => 'setVolume'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * musicAssetId  音乐资产ID，可以从资产库中查询。
    * volume  音乐音量。如100，表示音量100%，50表示音量50%。  默认值100，最小值0，最大值100。
    *
    * @var string[]
    */
    protected static $getters = [
            'musicAssetId' => 'getMusicAssetId',
            'volume' => 'getVolume'
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
        $this->container['musicAssetId'] = isset($data['musicAssetId']) ? $data['musicAssetId'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['musicAssetId']) && (mb_strlen($this->container['musicAssetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'musicAssetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['musicAssetId']) && (mb_strlen($this->container['musicAssetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'musicAssetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] > 100)) {
                $invalidProperties[] = "invalid value for 'volume', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['volume']) && ($this->container['volume'] < 0)) {
                $invalidProperties[] = "invalid value for 'volume', must be bigger than or equal to 0.";
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
    * Gets musicAssetId
    *  音乐资产ID，可以从资产库中查询。
    *
    * @return string|null
    */
    public function getMusicAssetId()
    {
        return $this->container['musicAssetId'];
    }

    /**
    * Sets musicAssetId
    *
    * @param string|null $musicAssetId 音乐资产ID，可以从资产库中查询。
    *
    * @return $this
    */
    public function setMusicAssetId($musicAssetId)
    {
        $this->container['musicAssetId'] = $musicAssetId;
        return $this;
    }

    /**
    * Gets volume
    *  音乐音量。如100，表示音量100%，50表示音量50%。  默认值100，最小值0，最大值100。
    *
    * @return int|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param int|null $volume 音乐音量。如100，表示音量100%，50表示音量50%。  默认值100，最小值0，最大值100。
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
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

