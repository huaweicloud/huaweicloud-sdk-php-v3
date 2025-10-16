<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddClusterPortResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddClusterPortResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  uuid
    * clusterId  该端口归属的集群id
    * elbId  租户的elbId
    * elbIp  租户的elb的ip
    * mode  PROXY：代理模式端口 TUNNEL：隧道模式自定端口 TUNNEL_FIXED：隧道模式的固定隧道端口
    * listenerPort  elb监听端口
    * listenerId  elb监听器id
    * serverGroupPort  后端服务组绑定的后端服务器的业务端口
    * serverGroupId  后端服务组id
    * projectId  项目id
    * validateTime  最后验证时间
    * wrong  资源是否异常。 由于该接口功能是cpcs操作租户的elb。而租户是可以二次操作cpcs创建的端口映射的。cpcs提供了一个检测接口，用以检测cpcs创建的这一套监听端口是否有误。
    * wrongMsg  若端口有误。即wrong=true时。该字段描述错误的地方
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterId' => 'string',
            'elbId' => 'string',
            'elbIp' => 'string',
            'mode' => 'string',
            'listenerPort' => 'int',
            'listenerId' => 'string',
            'serverGroupPort' => 'int',
            'serverGroupId' => 'string',
            'projectId' => 'string',
            'validateTime' => 'string',
            'wrong' => 'bool',
            'wrongMsg' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  uuid
    * clusterId  该端口归属的集群id
    * elbId  租户的elbId
    * elbIp  租户的elb的ip
    * mode  PROXY：代理模式端口 TUNNEL：隧道模式自定端口 TUNNEL_FIXED：隧道模式的固定隧道端口
    * listenerPort  elb监听端口
    * listenerId  elb监听器id
    * serverGroupPort  后端服务组绑定的后端服务器的业务端口
    * serverGroupId  后端服务组id
    * projectId  项目id
    * validateTime  最后验证时间
    * wrong  资源是否异常。 由于该接口功能是cpcs操作租户的elb。而租户是可以二次操作cpcs创建的端口映射的。cpcs提供了一个检测接口，用以检测cpcs创建的这一套监听端口是否有误。
    * wrongMsg  若端口有误。即wrong=true时。该字段描述错误的地方
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterId' => null,
        'elbId' => null,
        'elbIp' => null,
        'mode' => null,
        'listenerPort' => 'int32',
        'listenerId' => null,
        'serverGroupPort' => 'int32',
        'serverGroupId' => null,
        'projectId' => null,
        'validateTime' => null,
        'wrong' => null,
        'wrongMsg' => null
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
    * id  uuid
    * clusterId  该端口归属的集群id
    * elbId  租户的elbId
    * elbIp  租户的elb的ip
    * mode  PROXY：代理模式端口 TUNNEL：隧道模式自定端口 TUNNEL_FIXED：隧道模式的固定隧道端口
    * listenerPort  elb监听端口
    * listenerId  elb监听器id
    * serverGroupPort  后端服务组绑定的后端服务器的业务端口
    * serverGroupId  后端服务组id
    * projectId  项目id
    * validateTime  最后验证时间
    * wrong  资源是否异常。 由于该接口功能是cpcs操作租户的elb。而租户是可以二次操作cpcs创建的端口映射的。cpcs提供了一个检测接口，用以检测cpcs创建的这一套监听端口是否有误。
    * wrongMsg  若端口有误。即wrong=true时。该字段描述错误的地方
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterId' => 'cluster_id',
            'elbId' => 'elb_id',
            'elbIp' => 'elb_ip',
            'mode' => 'mode',
            'listenerPort' => 'listener_port',
            'listenerId' => 'listener_id',
            'serverGroupPort' => 'server_group_port',
            'serverGroupId' => 'server_group_id',
            'projectId' => 'project_id',
            'validateTime' => 'validate_time',
            'wrong' => 'wrong',
            'wrongMsg' => 'wrong_msg'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  uuid
    * clusterId  该端口归属的集群id
    * elbId  租户的elbId
    * elbIp  租户的elb的ip
    * mode  PROXY：代理模式端口 TUNNEL：隧道模式自定端口 TUNNEL_FIXED：隧道模式的固定隧道端口
    * listenerPort  elb监听端口
    * listenerId  elb监听器id
    * serverGroupPort  后端服务组绑定的后端服务器的业务端口
    * serverGroupId  后端服务组id
    * projectId  项目id
    * validateTime  最后验证时间
    * wrong  资源是否异常。 由于该接口功能是cpcs操作租户的elb。而租户是可以二次操作cpcs创建的端口映射的。cpcs提供了一个检测接口，用以检测cpcs创建的这一套监听端口是否有误。
    * wrongMsg  若端口有误。即wrong=true时。该字段描述错误的地方
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'elbId' => 'setElbId',
            'elbIp' => 'setElbIp',
            'mode' => 'setMode',
            'listenerPort' => 'setListenerPort',
            'listenerId' => 'setListenerId',
            'serverGroupPort' => 'setServerGroupPort',
            'serverGroupId' => 'setServerGroupId',
            'projectId' => 'setProjectId',
            'validateTime' => 'setValidateTime',
            'wrong' => 'setWrong',
            'wrongMsg' => 'setWrongMsg'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  uuid
    * clusterId  该端口归属的集群id
    * elbId  租户的elbId
    * elbIp  租户的elb的ip
    * mode  PROXY：代理模式端口 TUNNEL：隧道模式自定端口 TUNNEL_FIXED：隧道模式的固定隧道端口
    * listenerPort  elb监听端口
    * listenerId  elb监听器id
    * serverGroupPort  后端服务组绑定的后端服务器的业务端口
    * serverGroupId  后端服务组id
    * projectId  项目id
    * validateTime  最后验证时间
    * wrong  资源是否异常。 由于该接口功能是cpcs操作租户的elb。而租户是可以二次操作cpcs创建的端口映射的。cpcs提供了一个检测接口，用以检测cpcs创建的这一套监听端口是否有误。
    * wrongMsg  若端口有误。即wrong=true时。该字段描述错误的地方
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'elbId' => 'getElbId',
            'elbIp' => 'getElbIp',
            'mode' => 'getMode',
            'listenerPort' => 'getListenerPort',
            'listenerId' => 'getListenerId',
            'serverGroupPort' => 'getServerGroupPort',
            'serverGroupId' => 'getServerGroupId',
            'projectId' => 'getProjectId',
            'validateTime' => 'getValidateTime',
            'wrong' => 'getWrong',
            'wrongMsg' => 'getWrongMsg'
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
    const MODE_TUNNEL_FIXED = 'TUNNEL_FIXED';
    const MODE_TUNNEL = 'TUNNEL';
    const MODE_PROXY = 'PROXY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_TUNNEL_FIXED,
            self::MODE_TUNNEL,
            self::MODE_PROXY,
        ];
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['elbId'] = isset($data['elbId']) ? $data['elbId'] : null;
        $this->container['elbIp'] = isset($data['elbIp']) ? $data['elbIp'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['listenerPort'] = isset($data['listenerPort']) ? $data['listenerPort'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['serverGroupPort'] = isset($data['serverGroupPort']) ? $data['serverGroupPort'] : null;
        $this->container['serverGroupId'] = isset($data['serverGroupId']) ? $data['serverGroupId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['validateTime'] = isset($data['validateTime']) ? $data['validateTime'] : null;
        $this->container['wrong'] = isset($data['wrong']) ? $data['wrong'] : null;
        $this->container['wrongMsg'] = isset($data['wrongMsg']) ? $data['wrongMsg'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  uuid
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id uuid
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets clusterId
    *  该端口归属的集群id
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId 该端口归属的集群id
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets elbId
    *  租户的elbId
    *
    * @return string|null
    */
    public function getElbId()
    {
        return $this->container['elbId'];
    }

    /**
    * Sets elbId
    *
    * @param string|null $elbId 租户的elbId
    *
    * @return $this
    */
    public function setElbId($elbId)
    {
        $this->container['elbId'] = $elbId;
        return $this;
    }

    /**
    * Gets elbIp
    *  租户的elb的ip
    *
    * @return string|null
    */
    public function getElbIp()
    {
        return $this->container['elbIp'];
    }

    /**
    * Sets elbIp
    *
    * @param string|null $elbIp 租户的elb的ip
    *
    * @return $this
    */
    public function setElbIp($elbIp)
    {
        $this->container['elbIp'] = $elbIp;
        return $this;
    }

    /**
    * Gets mode
    *  PROXY：代理模式端口 TUNNEL：隧道模式自定端口 TUNNEL_FIXED：隧道模式的固定隧道端口
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode PROXY：代理模式端口 TUNNEL：隧道模式自定端口 TUNNEL_FIXED：隧道模式的固定隧道端口
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets listenerPort
    *  elb监听端口
    *
    * @return int|null
    */
    public function getListenerPort()
    {
        return $this->container['listenerPort'];
    }

    /**
    * Sets listenerPort
    *
    * @param int|null $listenerPort elb监听端口
    *
    * @return $this
    */
    public function setListenerPort($listenerPort)
    {
        $this->container['listenerPort'] = $listenerPort;
        return $this;
    }

    /**
    * Gets listenerId
    *  elb监听器id
    *
    * @return string|null
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string|null $listenerId elb监听器id
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets serverGroupPort
    *  后端服务组绑定的后端服务器的业务端口
    *
    * @return int|null
    */
    public function getServerGroupPort()
    {
        return $this->container['serverGroupPort'];
    }

    /**
    * Sets serverGroupPort
    *
    * @param int|null $serverGroupPort 后端服务组绑定的后端服务器的业务端口
    *
    * @return $this
    */
    public function setServerGroupPort($serverGroupPort)
    {
        $this->container['serverGroupPort'] = $serverGroupPort;
        return $this;
    }

    /**
    * Gets serverGroupId
    *  后端服务组id
    *
    * @return string|null
    */
    public function getServerGroupId()
    {
        return $this->container['serverGroupId'];
    }

    /**
    * Sets serverGroupId
    *
    * @param string|null $serverGroupId 后端服务组id
    *
    * @return $this
    */
    public function setServerGroupId($serverGroupId)
    {
        $this->container['serverGroupId'] = $serverGroupId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets validateTime
    *  最后验证时间
    *
    * @return string|null
    */
    public function getValidateTime()
    {
        return $this->container['validateTime'];
    }

    /**
    * Sets validateTime
    *
    * @param string|null $validateTime 最后验证时间
    *
    * @return $this
    */
    public function setValidateTime($validateTime)
    {
        $this->container['validateTime'] = $validateTime;
        return $this;
    }

    /**
    * Gets wrong
    *  资源是否异常。 由于该接口功能是cpcs操作租户的elb。而租户是可以二次操作cpcs创建的端口映射的。cpcs提供了一个检测接口，用以检测cpcs创建的这一套监听端口是否有误。
    *
    * @return bool|null
    */
    public function getWrong()
    {
        return $this->container['wrong'];
    }

    /**
    * Sets wrong
    *
    * @param bool|null $wrong 资源是否异常。 由于该接口功能是cpcs操作租户的elb。而租户是可以二次操作cpcs创建的端口映射的。cpcs提供了一个检测接口，用以检测cpcs创建的这一套监听端口是否有误。
    *
    * @return $this
    */
    public function setWrong($wrong)
    {
        $this->container['wrong'] = $wrong;
        return $this;
    }

    /**
    * Gets wrongMsg
    *  若端口有误。即wrong=true时。该字段描述错误的地方
    *
    * @return string|null
    */
    public function getWrongMsg()
    {
        return $this->container['wrongMsg'];
    }

    /**
    * Sets wrongMsg
    *
    * @param string|null $wrongMsg 若端口有误。即wrong=true时。该字段描述错误的地方
    *
    * @return $this
    */
    public function setWrongMsg($wrongMsg)
    {
        $this->container['wrongMsg'] = $wrongMsg;
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

