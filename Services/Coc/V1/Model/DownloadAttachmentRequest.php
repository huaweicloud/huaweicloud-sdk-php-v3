<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DownloadAttachmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DownloadAttachmentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ticketType  **参数解释：** 工单类型，此处传递固定值incident。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * docId  **参数解释：** 需要下载的文件唯一ID。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ticketType' => 'string',
            'docId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ticketType  **参数解释：** 工单类型，此处传递固定值incident。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * docId  **参数解释：** 需要下载的文件唯一ID。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ticketType' => null,
        'docId' => null
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
    * ticketType  **参数解释：** 工单类型，此处传递固定值incident。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * docId  **参数解释：** 需要下载的文件唯一ID。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ticketType' => 'ticket_type',
            'docId' => 'doc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ticketType  **参数解释：** 工单类型，此处传递固定值incident。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * docId  **参数解释：** 需要下载的文件唯一ID。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ticketType' => 'setTicketType',
            'docId' => 'setDocId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ticketType  **参数解释：** 工单类型，此处传递固定值incident。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * docId  **参数解释：** 需要下载的文件唯一ID。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ticketType' => 'getTicketType',
            'docId' => 'getDocId'
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
        $this->container['ticketType'] = isset($data['ticketType']) ? $data['ticketType'] : null;
        $this->container['docId'] = isset($data['docId']) ? $data['docId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ticketType'] === null) {
            $invalidProperties[] = "'ticketType' can't be null";
        }
            if ((mb_strlen($this->container['ticketType']) > 255)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['ticketType']) < 1)) {
                $invalidProperties[] = "invalid value for 'ticketType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['docId'] === null) {
            $invalidProperties[] = "'docId' can't be null";
        }
            if ((mb_strlen($this->container['docId']) > 100)) {
                $invalidProperties[] = "invalid value for 'docId', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['docId']) < 1)) {
                $invalidProperties[] = "invalid value for 'docId', the character length must be bigger than or equal to 1.";
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
    * Gets ticketType
    *  **参数解释：** 工单类型，此处传递固定值incident。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getTicketType()
    {
        return $this->container['ticketType'];
    }

    /**
    * Sets ticketType
    *
    * @param string $ticketType **参数解释：** 工单类型，此处传递固定值incident。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTicketType($ticketType)
    {
        $this->container['ticketType'] = $ticketType;
        return $this;
    }

    /**
    * Gets docId
    *  **参数解释：** 需要下载的文件唯一ID。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getDocId()
    {
        return $this->container['docId'];
    }

    /**
    * Sets docId
    *
    * @param string $docId **参数解释：** 需要下载的文件唯一ID。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDocId($docId)
    {
        $this->container['docId'] = $docId;
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

