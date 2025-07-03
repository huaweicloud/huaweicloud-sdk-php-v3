<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAccessPointResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAccessPointResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  id
    * gmtCreate  创建时间
    * gmtModify  修改时间
    * region  当前局点
    * accessPoint  接入点地址
    * token  token
    * hiddenToken  token隐藏字符
    * swBusinessId  应用ID
    * agentDownloadUrl  agent下载地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'gmtCreate' => 'string',
            'gmtModify' => 'string',
            'region' => 'string',
            'accessPoint' => 'string',
            'token' => 'string',
            'hiddenToken' => 'string',
            'swBusinessId' => 'int',
            'agentDownloadUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  id
    * gmtCreate  创建时间
    * gmtModify  修改时间
    * region  当前局点
    * accessPoint  接入点地址
    * token  token
    * hiddenToken  token隐藏字符
    * swBusinessId  应用ID
    * agentDownloadUrl  agent下载地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'gmtCreate' => null,
        'gmtModify' => null,
        'region' => null,
        'accessPoint' => null,
        'token' => null,
        'hiddenToken' => null,
        'swBusinessId' => 'int32',
        'agentDownloadUrl' => null
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
    * id  id
    * gmtCreate  创建时间
    * gmtModify  修改时间
    * region  当前局点
    * accessPoint  接入点地址
    * token  token
    * hiddenToken  token隐藏字符
    * swBusinessId  应用ID
    * agentDownloadUrl  agent下载地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'gmtCreate' => 'gmt_create',
            'gmtModify' => 'gmt_modify',
            'region' => 'region',
            'accessPoint' => 'accessPoint',
            'token' => 'token',
            'hiddenToken' => 'hidden_token',
            'swBusinessId' => 'sw_business_id',
            'agentDownloadUrl' => 'agent_download_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  id
    * gmtCreate  创建时间
    * gmtModify  修改时间
    * region  当前局点
    * accessPoint  接入点地址
    * token  token
    * hiddenToken  token隐藏字符
    * swBusinessId  应用ID
    * agentDownloadUrl  agent下载地址
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'gmtCreate' => 'setGmtCreate',
            'gmtModify' => 'setGmtModify',
            'region' => 'setRegion',
            'accessPoint' => 'setAccessPoint',
            'token' => 'setToken',
            'hiddenToken' => 'setHiddenToken',
            'swBusinessId' => 'setSwBusinessId',
            'agentDownloadUrl' => 'setAgentDownloadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  id
    * gmtCreate  创建时间
    * gmtModify  修改时间
    * region  当前局点
    * accessPoint  接入点地址
    * token  token
    * hiddenToken  token隐藏字符
    * swBusinessId  应用ID
    * agentDownloadUrl  agent下载地址
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'gmtCreate' => 'getGmtCreate',
            'gmtModify' => 'getGmtModify',
            'region' => 'getRegion',
            'accessPoint' => 'getAccessPoint',
            'token' => 'getToken',
            'hiddenToken' => 'getHiddenToken',
            'swBusinessId' => 'getSwBusinessId',
            'agentDownloadUrl' => 'getAgentDownloadUrl'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['gmtCreate'] = isset($data['gmtCreate']) ? $data['gmtCreate'] : null;
        $this->container['gmtModify'] = isset($data['gmtModify']) ? $data['gmtModify'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['accessPoint'] = isset($data['accessPoint']) ? $data['accessPoint'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['hiddenToken'] = isset($data['hiddenToken']) ? $data['hiddenToken'] : null;
        $this->container['swBusinessId'] = isset($data['swBusinessId']) ? $data['swBusinessId'] : null;
        $this->container['agentDownloadUrl'] = isset($data['agentDownloadUrl']) ? $data['agentDownloadUrl'] : null;
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
    * Gets id
    *  id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets gmtCreate
    *  创建时间
    *
    * @return string|null
    */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
    * Sets gmtCreate
    *
    * @param string|null $gmtCreate 创建时间
    *
    * @return $this
    */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;
        return $this;
    }

    /**
    * Gets gmtModify
    *  修改时间
    *
    * @return string|null
    */
    public function getGmtModify()
    {
        return $this->container['gmtModify'];
    }

    /**
    * Sets gmtModify
    *
    * @param string|null $gmtModify 修改时间
    *
    * @return $this
    */
    public function setGmtModify($gmtModify)
    {
        $this->container['gmtModify'] = $gmtModify;
        return $this;
    }

    /**
    * Gets region
    *  当前局点
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 当前局点
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets accessPoint
    *  接入点地址
    *
    * @return string|null
    */
    public function getAccessPoint()
    {
        return $this->container['accessPoint'];
    }

    /**
    * Sets accessPoint
    *
    * @param string|null $accessPoint 接入点地址
    *
    * @return $this
    */
    public function setAccessPoint($accessPoint)
    {
        $this->container['accessPoint'] = $accessPoint;
        return $this;
    }

    /**
    * Gets token
    *  token
    *
    * @return string|null
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string|null $token token
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
        return $this;
    }

    /**
    * Gets hiddenToken
    *  token隐藏字符
    *
    * @return string|null
    */
    public function getHiddenToken()
    {
        return $this->container['hiddenToken'];
    }

    /**
    * Sets hiddenToken
    *
    * @param string|null $hiddenToken token隐藏字符
    *
    * @return $this
    */
    public function setHiddenToken($hiddenToken)
    {
        $this->container['hiddenToken'] = $hiddenToken;
        return $this;
    }

    /**
    * Gets swBusinessId
    *  应用ID
    *
    * @return int|null
    */
    public function getSwBusinessId()
    {
        return $this->container['swBusinessId'];
    }

    /**
    * Sets swBusinessId
    *
    * @param int|null $swBusinessId 应用ID
    *
    * @return $this
    */
    public function setSwBusinessId($swBusinessId)
    {
        $this->container['swBusinessId'] = $swBusinessId;
        return $this;
    }

    /**
    * Gets agentDownloadUrl
    *  agent下载地址
    *
    * @return string|null
    */
    public function getAgentDownloadUrl()
    {
        return $this->container['agentDownloadUrl'];
    }

    /**
    * Sets agentDownloadUrl
    *
    * @param string|null $agentDownloadUrl agent下载地址
    *
    * @return $this
    */
    public function setAgentDownloadUrl($agentDownloadUrl)
    {
        $this->container['agentDownloadUrl'] = $agentDownloadUrl;
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

