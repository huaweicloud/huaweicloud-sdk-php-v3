<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVpnConnectionsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVpnConnectionsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpnConnections  vpnConnections
    * pageInfo  pageInfo
    * requestId  请求ID
    * totalCount  租户下连接总数
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpnConnections' => '\HuaweiCloud\SDK\Vpn\V5\Model\ResponseVpnConnection[]',
            'pageInfo' => '\HuaweiCloud\SDK\Vpn\V5\Model\PageInfo',
            'requestId' => 'string',
            'totalCount' => 'int',
            'headerResponseToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpnConnections  vpnConnections
    * pageInfo  pageInfo
    * requestId  请求ID
    * totalCount  租户下连接总数
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpnConnections' => null,
        'pageInfo' => null,
        'requestId' => null,
        'totalCount' => 'int64',
        'headerResponseToken' => null
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
    * vpnConnections  vpnConnections
    * pageInfo  pageInfo
    * requestId  请求ID
    * totalCount  租户下连接总数
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpnConnections' => 'vpn_connections',
            'pageInfo' => 'page_info',
            'requestId' => 'request_id',
            'totalCount' => 'total_count',
            'headerResponseToken' => 'header-response-token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpnConnections  vpnConnections
    * pageInfo  pageInfo
    * requestId  请求ID
    * totalCount  租户下连接总数
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $setters = [
            'vpnConnections' => 'setVpnConnections',
            'pageInfo' => 'setPageInfo',
            'requestId' => 'setRequestId',
            'totalCount' => 'setTotalCount',
            'headerResponseToken' => 'setHeaderResponseToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpnConnections  vpnConnections
    * pageInfo  pageInfo
    * requestId  请求ID
    * totalCount  租户下连接总数
    * headerResponseToken  headerResponseToken
    *
    * @var string[]
    */
    protected static $getters = [
            'vpnConnections' => 'getVpnConnections',
            'pageInfo' => 'getPageInfo',
            'requestId' => 'getRequestId',
            'totalCount' => 'getTotalCount',
            'headerResponseToken' => 'getHeaderResponseToken'
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
        $this->container['vpnConnections'] = isset($data['vpnConnections']) ? $data['vpnConnections'] : null;
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['headerResponseToken'] = isset($data['headerResponseToken']) ? $data['headerResponseToken'] : null;
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
    * Gets vpnConnections
    *  vpnConnections
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\ResponseVpnConnection[]|null
    */
    public function getVpnConnections()
    {
        return $this->container['vpnConnections'];
    }

    /**
    * Sets vpnConnections
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\ResponseVpnConnection[]|null $vpnConnections vpnConnections
    *
    * @return $this
    */
    public function setVpnConnections($vpnConnections)
    {
        $this->container['vpnConnections'] = $vpnConnections;
        return $this;
    }

    /**
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\Vpn\V5\Model\PageInfo|null
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\Vpn\V5\Model\PageInfo|null $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
        return $this;
    }

    /**
    * Gets requestId
    *  请求ID
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求ID
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets totalCount
    *  租户下连接总数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 租户下连接总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets headerResponseToken
    *  headerResponseToken
    *
    * @return string|null
    */
    public function getHeaderResponseToken()
    {
        return $this->container['headerResponseToken'];
    }

    /**
    * Sets headerResponseToken
    *
    * @param string|null $headerResponseToken headerResponseToken
    *
    * @return $this
    */
    public function setHeaderResponseToken($headerResponseToken)
    {
        $this->container['headerResponseToken'] = $headerResponseToken;
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

