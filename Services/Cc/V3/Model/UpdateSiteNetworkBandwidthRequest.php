<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSiteNetworkBandwidthRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSiteNetworkBandwidthRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * siteNetworkId  分支网络的ID。
    * siteConnectionId  实例ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'siteNetworkId' => 'string',
            'siteConnectionId' => 'string',
            'body' => '\HuaweiCloud\SDK\Cc\V3\Model\UpdateSiteConnectionBandwidthRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * siteNetworkId  分支网络的ID。
    * siteConnectionId  实例ID。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'siteNetworkId' => null,
        'siteConnectionId' => null,
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
    * siteNetworkId  分支网络的ID。
    * siteConnectionId  实例ID。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'siteNetworkId' => 'site_network_id',
            'siteConnectionId' => 'site_connection_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * siteNetworkId  分支网络的ID。
    * siteConnectionId  实例ID。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'siteNetworkId' => 'setSiteNetworkId',
            'siteConnectionId' => 'setSiteConnectionId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * siteNetworkId  分支网络的ID。
    * siteConnectionId  实例ID。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'siteNetworkId' => 'getSiteNetworkId',
            'siteConnectionId' => 'getSiteConnectionId',
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
        $this->container['siteNetworkId'] = isset($data['siteNetworkId']) ? $data['siteNetworkId'] : null;
        $this->container['siteConnectionId'] = isset($data['siteConnectionId']) ? $data['siteConnectionId'] : null;
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
        if ($this->container['siteNetworkId'] === null) {
            $invalidProperties[] = "'siteNetworkId' can't be null";
        }
            if ((mb_strlen($this->container['siteNetworkId']) > 36)) {
                $invalidProperties[] = "invalid value for 'siteNetworkId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['siteNetworkId']) < 36)) {
                $invalidProperties[] = "invalid value for 'siteNetworkId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['siteNetworkId'])) {
                $invalidProperties[] = "invalid value for 'siteNetworkId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['siteConnectionId'] === null) {
            $invalidProperties[] = "'siteConnectionId' can't be null";
        }
            if ((mb_strlen($this->container['siteConnectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'siteConnectionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['siteConnectionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'siteConnectionId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['siteConnectionId'])) {
                $invalidProperties[] = "invalid value for 'siteConnectionId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets siteNetworkId
    *  分支网络的ID。
    *
    * @return string
    */
    public function getSiteNetworkId()
    {
        return $this->container['siteNetworkId'];
    }

    /**
    * Sets siteNetworkId
    *
    * @param string $siteNetworkId 分支网络的ID。
    *
    * @return $this
    */
    public function setSiteNetworkId($siteNetworkId)
    {
        $this->container['siteNetworkId'] = $siteNetworkId;
        return $this;
    }

    /**
    * Gets siteConnectionId
    *  实例ID。
    *
    * @return string
    */
    public function getSiteConnectionId()
    {
        return $this->container['siteConnectionId'];
    }

    /**
    * Sets siteConnectionId
    *
    * @param string $siteConnectionId 实例ID。
    *
    * @return $this
    */
    public function setSiteConnectionId($siteConnectionId)
    {
        $this->container['siteConnectionId'] = $siteConnectionId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\UpdateSiteConnectionBandwidthRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\UpdateSiteConnectionBandwidthRequestBody|null $body body
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

