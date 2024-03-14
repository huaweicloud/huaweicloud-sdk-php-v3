<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateEndpointConnectionsDescRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateEndpointConnectionsDescRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  租户ID
    * vpcEndpointServiceId  终端节点服务ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'vpcEndpointServiceId' => 'string',
            'body' => '\HuaweiCloud\SDK\Vpcep\V1\Model\UpdateEndpointConnectionsDescRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  租户ID
    * vpcEndpointServiceId  终端节点服务ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'vpcEndpointServiceId' => null,
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
    * projectId  租户ID
    * vpcEndpointServiceId  终端节点服务ID
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'vpcEndpointServiceId' => 'vpc_endpoint_service_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  租户ID
    * vpcEndpointServiceId  终端节点服务ID
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'vpcEndpointServiceId' => 'setVpcEndpointServiceId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  租户ID
    * vpcEndpointServiceId  终端节点服务ID
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'vpcEndpointServiceId' => 'getVpcEndpointServiceId',
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['vpcEndpointServiceId'] = isset($data['vpcEndpointServiceId']) ? $data['vpcEndpointServiceId'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['vpcEndpointServiceId'] === null) {
            $invalidProperties[] = "'vpcEndpointServiceId' can't be null";
        }
            if ((mb_strlen($this->container['vpcEndpointServiceId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointServiceId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['vpcEndpointServiceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointServiceId', the character length must be bigger than or equal to 1.";
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
    * Gets projectId
    *  租户ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 租户ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets vpcEndpointServiceId
    *  终端节点服务ID
    *
    * @return string
    */
    public function getVpcEndpointServiceId()
    {
        return $this->container['vpcEndpointServiceId'];
    }

    /**
    * Sets vpcEndpointServiceId
    *
    * @param string $vpcEndpointServiceId 终端节点服务ID
    *
    * @return $this
    */
    public function setVpcEndpointServiceId($vpcEndpointServiceId)
    {
        $this->container['vpcEndpointServiceId'] = $vpcEndpointServiceId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\UpdateEndpointConnectionsDescRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\UpdateEndpointConnectionsDescRequestBody|null $body body
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

