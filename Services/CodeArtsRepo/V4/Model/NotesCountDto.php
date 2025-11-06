<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NotesCountDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NotesCountDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * notesCount  检视意见总数
    * unresolvedNotesCount  未解决的检视意见数量
    * alreadyResolvedCount  已解决的检视意见数量
    * needResolvedCount  需要解决的检视意见总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'notesCount' => 'int',
            'unresolvedNotesCount' => 'int',
            'alreadyResolvedCount' => 'int',
            'needResolvedCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * notesCount  检视意见总数
    * unresolvedNotesCount  未解决的检视意见数量
    * alreadyResolvedCount  已解决的检视意见数量
    * needResolvedCount  需要解决的检视意见总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'notesCount' => null,
        'unresolvedNotesCount' => null,
        'alreadyResolvedCount' => null,
        'needResolvedCount' => null
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
    * notesCount  检视意见总数
    * unresolvedNotesCount  未解决的检视意见数量
    * alreadyResolvedCount  已解决的检视意见数量
    * needResolvedCount  需要解决的检视意见总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'notesCount' => 'notes_count',
            'unresolvedNotesCount' => 'unresolved_notes_count',
            'alreadyResolvedCount' => 'already_resolved_count',
            'needResolvedCount' => 'need_resolved_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * notesCount  检视意见总数
    * unresolvedNotesCount  未解决的检视意见数量
    * alreadyResolvedCount  已解决的检视意见数量
    * needResolvedCount  需要解决的检视意见总数
    *
    * @var string[]
    */
    protected static $setters = [
            'notesCount' => 'setNotesCount',
            'unresolvedNotesCount' => 'setUnresolvedNotesCount',
            'alreadyResolvedCount' => 'setAlreadyResolvedCount',
            'needResolvedCount' => 'setNeedResolvedCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * notesCount  检视意见总数
    * unresolvedNotesCount  未解决的检视意见数量
    * alreadyResolvedCount  已解决的检视意见数量
    * needResolvedCount  需要解决的检视意见总数
    *
    * @var string[]
    */
    protected static $getters = [
            'notesCount' => 'getNotesCount',
            'unresolvedNotesCount' => 'getUnresolvedNotesCount',
            'alreadyResolvedCount' => 'getAlreadyResolvedCount',
            'needResolvedCount' => 'getNeedResolvedCount'
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
        $this->container['notesCount'] = isset($data['notesCount']) ? $data['notesCount'] : null;
        $this->container['unresolvedNotesCount'] = isset($data['unresolvedNotesCount']) ? $data['unresolvedNotesCount'] : null;
        $this->container['alreadyResolvedCount'] = isset($data['alreadyResolvedCount']) ? $data['alreadyResolvedCount'] : null;
        $this->container['needResolvedCount'] = isset($data['needResolvedCount']) ? $data['needResolvedCount'] : null;
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
    * Gets notesCount
    *  检视意见总数
    *
    * @return int|null
    */
    public function getNotesCount()
    {
        return $this->container['notesCount'];
    }

    /**
    * Sets notesCount
    *
    * @param int|null $notesCount 检视意见总数
    *
    * @return $this
    */
    public function setNotesCount($notesCount)
    {
        $this->container['notesCount'] = $notesCount;
        return $this;
    }

    /**
    * Gets unresolvedNotesCount
    *  未解决的检视意见数量
    *
    * @return int|null
    */
    public function getUnresolvedNotesCount()
    {
        return $this->container['unresolvedNotesCount'];
    }

    /**
    * Sets unresolvedNotesCount
    *
    * @param int|null $unresolvedNotesCount 未解决的检视意见数量
    *
    * @return $this
    */
    public function setUnresolvedNotesCount($unresolvedNotesCount)
    {
        $this->container['unresolvedNotesCount'] = $unresolvedNotesCount;
        return $this;
    }

    /**
    * Gets alreadyResolvedCount
    *  已解决的检视意见数量
    *
    * @return int|null
    */
    public function getAlreadyResolvedCount()
    {
        return $this->container['alreadyResolvedCount'];
    }

    /**
    * Sets alreadyResolvedCount
    *
    * @param int|null $alreadyResolvedCount 已解决的检视意见数量
    *
    * @return $this
    */
    public function setAlreadyResolvedCount($alreadyResolvedCount)
    {
        $this->container['alreadyResolvedCount'] = $alreadyResolvedCount;
        return $this;
    }

    /**
    * Gets needResolvedCount
    *  需要解决的检视意见总数
    *
    * @return int|null
    */
    public function getNeedResolvedCount()
    {
        return $this->container['needResolvedCount'];
    }

    /**
    * Sets needResolvedCount
    *
    * @param int|null $needResolvedCount 需要解决的检视意见总数
    *
    * @return $this
    */
    public function setNeedResolvedCount($needResolvedCount)
    {
        $this->container['needResolvedCount'] = $needResolvedCount;
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

