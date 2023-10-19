<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCentralNetworkGdgwAttachmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCentralNetworkGdgwAttachmentRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * centralNetworkId  中心网络的ID。
    * gdgwAttachmentId  中心网络DGW附件ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'centralNetworkId' => 'string',
            'gdgwAttachmentId' => 'string',
            'body' => '\HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkGdgwAttachmentRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * centralNetworkId  中心网络的ID。
    * gdgwAttachmentId  中心网络DGW附件ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'centralNetworkId' => null,
        'gdgwAttachmentId' => null,
        'body' => null
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
    * centralNetworkId  中心网络的ID。
    * gdgwAttachmentId  中心网络DGW附件ID。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'centralNetworkId' => 'central_network_id',
            'gdgwAttachmentId' => 'gdgw_attachment_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * centralNetworkId  中心网络的ID。
    * gdgwAttachmentId  中心网络DGW附件ID。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'centralNetworkId' => 'setCentralNetworkId',
            'gdgwAttachmentId' => 'setGdgwAttachmentId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * centralNetworkId  中心网络的ID。
    * gdgwAttachmentId  中心网络DGW附件ID。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'centralNetworkId' => 'getCentralNetworkId',
            'gdgwAttachmentId' => 'getGdgwAttachmentId',
            'body' => 'getBody'
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
        $this->container['centralNetworkId'] = isset($data['centralNetworkId']) ? $data['centralNetworkId'] : null;
        $this->container['gdgwAttachmentId'] = isset($data['gdgwAttachmentId']) ? $data['gdgwAttachmentId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['centralNetworkId'] === null) {
            $invalidProperties[] = "'centralNetworkId' can't be null";
        }
            if ((mb_strlen($this->container['centralNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['centralNetworkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['centralNetworkId'])) {
                $invalidProperties[] = "invalid value for 'centralNetworkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['gdgwAttachmentId'] === null) {
            $invalidProperties[] = "'gdgwAttachmentId' can't be null";
        }
            if ((mb_strlen($this->container['gdgwAttachmentId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gdgwAttachmentId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['gdgwAttachmentId']) < 36)) {
                $invalidProperties[] = "invalid value for 'gdgwAttachmentId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['gdgwAttachmentId'])) {
                $invalidProperties[] = "invalid value for 'gdgwAttachmentId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets centralNetworkId
    *  中心网络的ID。
    *
    * @return string
    */
    public function getCentralNetworkId()
    {
        return $this->container['centralNetworkId'];
    }

    /**
    * Sets centralNetworkId
    *
    * @param string $centralNetworkId 中心网络的ID。
    *
    * @return $this
    */
    public function setCentralNetworkId($centralNetworkId)
    {
        $this->container['centralNetworkId'] = $centralNetworkId;
        return $this;
    }

    /**
    * Gets gdgwAttachmentId
    *  中心网络DGW附件ID。
    *
    * @return string
    */
    public function getGdgwAttachmentId()
    {
        return $this->container['gdgwAttachmentId'];
    }

    /**
    * Sets gdgwAttachmentId
    *
    * @param string $gdgwAttachmentId 中心网络DGW附件ID。
    *
    * @return $this
    */
    public function setGdgwAttachmentId($gdgwAttachmentId)
    {
        $this->container['gdgwAttachmentId'] = $gdgwAttachmentId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkGdgwAttachmentRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\UpdateCentralNetworkGdgwAttachmentRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

