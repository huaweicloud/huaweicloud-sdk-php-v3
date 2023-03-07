<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubtitleModifyReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubtitleModifyReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * assetId  媒资ID
    * defaultLanguage  字幕默认语言(字幕必须存在)
    * addSubtitles  需新增或修改的字幕
    * deleteSubtitles  需删除的字幕，language不能与add_subtitles重复
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'assetId' => 'string',
            'defaultLanguage' => 'string',
            'addSubtitles' => '\HuaweiCloud\SDK\Vod\V1\Model\AddSubtitle[]',
            'deleteSubtitles' => '\HuaweiCloud\SDK\Vod\V1\Model\DeleteSubtitle[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * assetId  媒资ID
    * defaultLanguage  字幕默认语言(字幕必须存在)
    * addSubtitles  需新增或修改的字幕
    * deleteSubtitles  需删除的字幕，language不能与add_subtitles重复
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'assetId' => null,
        'defaultLanguage' => null,
        'addSubtitles' => null,
        'deleteSubtitles' => null
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
    * assetId  媒资ID
    * defaultLanguage  字幕默认语言(字幕必须存在)
    * addSubtitles  需新增或修改的字幕
    * deleteSubtitles  需删除的字幕，language不能与add_subtitles重复
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'assetId' => 'asset_id',
            'defaultLanguage' => 'default_language',
            'addSubtitles' => 'add_subtitles',
            'deleteSubtitles' => 'delete_subtitles'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * assetId  媒资ID
    * defaultLanguage  字幕默认语言(字幕必须存在)
    * addSubtitles  需新增或修改的字幕
    * deleteSubtitles  需删除的字幕，language不能与add_subtitles重复
    *
    * @var string[]
    */
    protected static $setters = [
            'assetId' => 'setAssetId',
            'defaultLanguage' => 'setDefaultLanguage',
            'addSubtitles' => 'setAddSubtitles',
            'deleteSubtitles' => 'setDeleteSubtitles'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * assetId  媒资ID
    * defaultLanguage  字幕默认语言(字幕必须存在)
    * addSubtitles  需新增或修改的字幕
    * deleteSubtitles  需删除的字幕，language不能与add_subtitles重复
    *
    * @var string[]
    */
    protected static $getters = [
            'assetId' => 'getAssetId',
            'defaultLanguage' => 'getDefaultLanguage',
            'addSubtitles' => 'getAddSubtitles',
            'deleteSubtitles' => 'getDeleteSubtitles'
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
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['defaultLanguage'] = isset($data['defaultLanguage']) ? $data['defaultLanguage'] : null;
        $this->container['addSubtitles'] = isset($data['addSubtitles']) ? $data['addSubtitles'] : null;
        $this->container['deleteSubtitles'] = isset($data['deleteSubtitles']) ? $data['deleteSubtitles'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['assetId'] === null) {
            $invalidProperties[] = "'assetId' can't be null";
        }
            if (!is_null($this->container['defaultLanguage']) && (mb_strlen($this->container['defaultLanguage']) > 32)) {
                $invalidProperties[] = "invalid value for 'defaultLanguage', the character length must be smaller than or equal to 32.";
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
    * Gets assetId
    *  媒资ID
    *
    * @return string
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string $assetId 媒资ID
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets defaultLanguage
    *  字幕默认语言(字幕必须存在)
    *
    * @return string|null
    */
    public function getDefaultLanguage()
    {
        return $this->container['defaultLanguage'];
    }

    /**
    * Sets defaultLanguage
    *
    * @param string|null $defaultLanguage 字幕默认语言(字幕必须存在)
    *
    * @return $this
    */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->container['defaultLanguage'] = $defaultLanguage;
        return $this;
    }

    /**
    * Gets addSubtitles
    *  需新增或修改的字幕
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\AddSubtitle[]|null
    */
    public function getAddSubtitles()
    {
        return $this->container['addSubtitles'];
    }

    /**
    * Sets addSubtitles
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\AddSubtitle[]|null $addSubtitles 需新增或修改的字幕
    *
    * @return $this
    */
    public function setAddSubtitles($addSubtitles)
    {
        $this->container['addSubtitles'] = $addSubtitles;
        return $this;
    }

    /**
    * Gets deleteSubtitles
    *  需删除的字幕，language不能与add_subtitles重复
    *
    * @return \HuaweiCloud\SDK\Vod\V1\Model\DeleteSubtitle[]|null
    */
    public function getDeleteSubtitles()
    {
        return $this->container['deleteSubtitles'];
    }

    /**
    * Sets deleteSubtitles
    *
    * @param \HuaweiCloud\SDK\Vod\V1\Model\DeleteSubtitle[]|null $deleteSubtitles 需删除的字幕，language不能与add_subtitles重复
    *
    * @return $this
    */
    public function setDeleteSubtitles($deleteSubtitles)
    {
        $this->container['deleteSubtitles'] = $deleteSubtitles;
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

