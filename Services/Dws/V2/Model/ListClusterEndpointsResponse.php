<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterEndpointsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterEndpointsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicEndpoints  publicEndpoints
    * privateEndpoints  privateEndpoints
    * publicIpInfos  **参数解释**： 公网IP详细信息，显示每个节点当前是否绑定公网IP及对应状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicEndpoints' => '\HuaweiCloud\SDK\Dws\V2\Model\PublicEndpointResponse',
            'privateEndpoints' => '\HuaweiCloud\SDK\Dws\V2\Model\PrivateEndpointResponse',
            'publicIpInfos' => '\HuaweiCloud\SDK\Dws\V2\Model\PublicIpInfoResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicEndpoints  publicEndpoints
    * privateEndpoints  privateEndpoints
    * publicIpInfos  **参数解释**： 公网IP详细信息，显示每个节点当前是否绑定公网IP及对应状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicEndpoints' => null,
        'privateEndpoints' => null,
        'publicIpInfos' => null
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
    * publicEndpoints  publicEndpoints
    * privateEndpoints  privateEndpoints
    * publicIpInfos  **参数解释**： 公网IP详细信息，显示每个节点当前是否绑定公网IP及对应状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicEndpoints' => 'public_endpoints',
            'privateEndpoints' => 'private_endpoints',
            'publicIpInfos' => 'public_ip_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicEndpoints  publicEndpoints
    * privateEndpoints  privateEndpoints
    * publicIpInfos  **参数解释**： 公网IP详细信息，显示每个节点当前是否绑定公网IP及对应状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'publicEndpoints' => 'setPublicEndpoints',
            'privateEndpoints' => 'setPrivateEndpoints',
            'publicIpInfos' => 'setPublicIpInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicEndpoints  publicEndpoints
    * privateEndpoints  privateEndpoints
    * publicIpInfos  **参数解释**： 公网IP详细信息，显示每个节点当前是否绑定公网IP及对应状态。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'publicEndpoints' => 'getPublicEndpoints',
            'privateEndpoints' => 'getPrivateEndpoints',
            'publicIpInfos' => 'getPublicIpInfos'
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
        $this->container['publicEndpoints'] = isset($data['publicEndpoints']) ? $data['publicEndpoints'] : null;
        $this->container['privateEndpoints'] = isset($data['privateEndpoints']) ? $data['privateEndpoints'] : null;
        $this->container['publicIpInfos'] = isset($data['publicIpInfos']) ? $data['publicIpInfos'] : null;
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
    * Gets publicEndpoints
    *  publicEndpoints
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PublicEndpointResponse|null
    */
    public function getPublicEndpoints()
    {
        return $this->container['publicEndpoints'];
    }

    /**
    * Sets publicEndpoints
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PublicEndpointResponse|null $publicEndpoints publicEndpoints
    *
    * @return $this
    */
    public function setPublicEndpoints($publicEndpoints)
    {
        $this->container['publicEndpoints'] = $publicEndpoints;
        return $this;
    }

    /**
    * Gets privateEndpoints
    *  privateEndpoints
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PrivateEndpointResponse|null
    */
    public function getPrivateEndpoints()
    {
        return $this->container['privateEndpoints'];
    }

    /**
    * Sets privateEndpoints
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PrivateEndpointResponse|null $privateEndpoints privateEndpoints
    *
    * @return $this
    */
    public function setPrivateEndpoints($privateEndpoints)
    {
        $this->container['privateEndpoints'] = $privateEndpoints;
        return $this;
    }

    /**
    * Gets publicIpInfos
    *  **参数解释**： 公网IP详细信息，显示每个节点当前是否绑定公网IP及对应状态。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PublicIpInfoResponse[]|null
    */
    public function getPublicIpInfos()
    {
        return $this->container['publicIpInfos'];
    }

    /**
    * Sets publicIpInfos
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PublicIpInfoResponse[]|null $publicIpInfos **参数解释**： 公网IP详细信息，显示每个节点当前是否绑定公网IP及对应状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPublicIpInfos($publicIpInfos)
    {
        $this->container['publicIpInfos'] = $publicIpInfos;
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

