<?php

namespace HuaweiCloud\SDK\Aom\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentImportParamNew implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentImportParamNew';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * password  机器登录密码。
    * agentId  agent唯一值，重复导入时需要传递。
    * innerIp  机器IP。
    * port  机器登录端口，默认22。
    * account  机器ssh账号。
    * osType  机器操作系统类型。
    * vpcId  机器所属VPC ID。
    * cocCmdbId  外来唯一标识，COC用。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'password' => 'string',
            'agentId' => 'string',
            'innerIp' => 'string',
            'port' => 'int',
            'account' => 'string',
            'osType' => 'string',
            'vpcId' => 'string',
            'cocCmdbId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * password  机器登录密码。
    * agentId  agent唯一值，重复导入时需要传递。
    * innerIp  机器IP。
    * port  机器登录端口，默认22。
    * account  机器ssh账号。
    * osType  机器操作系统类型。
    * vpcId  机器所属VPC ID。
    * cocCmdbId  外来唯一标识，COC用。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'password' => null,
        'agentId' => null,
        'innerIp' => null,
        'port' => 'int32',
        'account' => null,
        'osType' => null,
        'vpcId' => null,
        'cocCmdbId' => null
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
    * password  机器登录密码。
    * agentId  agent唯一值，重复导入时需要传递。
    * innerIp  机器IP。
    * port  机器登录端口，默认22。
    * account  机器ssh账号。
    * osType  机器操作系统类型。
    * vpcId  机器所属VPC ID。
    * cocCmdbId  外来唯一标识，COC用。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'password' => 'password',
            'agentId' => 'agent_id',
            'innerIp' => 'inner_ip',
            'port' => 'port',
            'account' => 'account',
            'osType' => 'os_type',
            'vpcId' => 'vpc_id',
            'cocCmdbId' => 'coc_cmdb_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * password  机器登录密码。
    * agentId  agent唯一值，重复导入时需要传递。
    * innerIp  机器IP。
    * port  机器登录端口，默认22。
    * account  机器ssh账号。
    * osType  机器操作系统类型。
    * vpcId  机器所属VPC ID。
    * cocCmdbId  外来唯一标识，COC用。
    *
    * @var string[]
    */
    protected static $setters = [
            'password' => 'setPassword',
            'agentId' => 'setAgentId',
            'innerIp' => 'setInnerIp',
            'port' => 'setPort',
            'account' => 'setAccount',
            'osType' => 'setOsType',
            'vpcId' => 'setVpcId',
            'cocCmdbId' => 'setCocCmdbId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * password  机器登录密码。
    * agentId  agent唯一值，重复导入时需要传递。
    * innerIp  机器IP。
    * port  机器登录端口，默认22。
    * account  机器ssh账号。
    * osType  机器操作系统类型。
    * vpcId  机器所属VPC ID。
    * cocCmdbId  外来唯一标识，COC用。
    *
    * @var string[]
    */
    protected static $getters = [
            'password' => 'getPassword',
            'agentId' => 'getAgentId',
            'innerIp' => 'getInnerIp',
            'port' => 'getPort',
            'account' => 'getAccount',
            'osType' => 'getOsType',
            'vpcId' => 'getVpcId',
            'cocCmdbId' => 'getCocCmdbId'
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
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['innerIp'] = isset($data['innerIp']) ? $data['innerIp'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['cocCmdbId'] = isset($data['cocCmdbId']) ? $data['cocCmdbId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['password'] === null) {
            $invalidProperties[] = "'password' can't be null";
        }
        if ($this->container['innerIp'] === null) {
            $invalidProperties[] = "'innerIp' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['account'] === null) {
            $invalidProperties[] = "'account' can't be null";
        }
        if ($this->container['osType'] === null) {
            $invalidProperties[] = "'osType' can't be null";
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
    * Gets password
    *  机器登录密码。
    *
    * @return string
    */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
    * Sets password
    *
    * @param string $password 机器登录密码。
    *
    * @return $this
    */
    public function setPassword($password)
    {
        $this->container['password'] = $password;
        return $this;
    }

    /**
    * Gets agentId
    *  agent唯一值，重复导入时需要传递。
    *
    * @return string|null
    */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
    * Sets agentId
    *
    * @param string|null $agentId agent唯一值，重复导入时需要传递。
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets innerIp
    *  机器IP。
    *
    * @return string
    */
    public function getInnerIp()
    {
        return $this->container['innerIp'];
    }

    /**
    * Sets innerIp
    *
    * @param string $innerIp 机器IP。
    *
    * @return $this
    */
    public function setInnerIp($innerIp)
    {
        $this->container['innerIp'] = $innerIp;
        return $this;
    }

    /**
    * Gets port
    *  机器登录端口，默认22。
    *
    * @return int
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int $port 机器登录端口，默认22。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets account
    *  机器ssh账号。
    *
    * @return string
    */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
    * Sets account
    *
    * @param string $account 机器ssh账号。
    *
    * @return $this
    */
    public function setAccount($account)
    {
        $this->container['account'] = $account;
        return $this;
    }

    /**
    * Gets osType
    *  机器操作系统类型。
    *
    * @return string
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string $osType 机器操作系统类型。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets vpcId
    *  机器所属VPC ID。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 机器所属VPC ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets cocCmdbId
    *  外来唯一标识，COC用。
    *
    * @return string|null
    */
    public function getCocCmdbId()
    {
        return $this->container['cocCmdbId'];
    }

    /**
    * Sets cocCmdbId
    *
    * @param string|null $cocCmdbId 外来唯一标识，COC用。
    *
    * @return $this
    */
    public function setCocCmdbId($cocCmdbId)
    {
        $this->container['cocCmdbId'] = $cocCmdbId;
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

