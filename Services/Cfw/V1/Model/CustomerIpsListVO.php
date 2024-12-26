<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerIpsListVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerIpsListVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  动作（0：只记录日志，1：重置/拦截）
    * affectedOs  操作系统
    * attackType  攻击类型
    * configStatus  规则状态（0：初始化，1：配置中，2：配置成功，3：配置失败）
    * content  内容json存储
    * dstPortType  目的端口类型
    * dstPorts  目的端口
    * groupId  防火墙集群id
    * ipsCfwId  cfw侧自定义ips规则id
    * ipsId  山石侧规则id
    * ipsName  ips规则名称
    * protocol  协议
    * severity  严重程度（critical：致命，high：高危，medium:中危，low:低危）
    * software  影响软件
    * srcPortType  源端口类型
    * srcPorts  源端口
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'int',
            'affectedOs' => 'int',
            'attackType' => 'int',
            'configStatus' => 'int',
            'content' => 'string',
            'dstPortType' => 'int',
            'dstPorts' => 'string',
            'groupId' => 'string',
            'ipsCfwId' => 'string',
            'ipsId' => 'string',
            'ipsName' => 'string',
            'protocol' => 'int',
            'severity' => 'int',
            'software' => 'int',
            'srcPortType' => 'int',
            'srcPorts' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  动作（0：只记录日志，1：重置/拦截）
    * affectedOs  操作系统
    * attackType  攻击类型
    * configStatus  规则状态（0：初始化，1：配置中，2：配置成功，3：配置失败）
    * content  内容json存储
    * dstPortType  目的端口类型
    * dstPorts  目的端口
    * groupId  防火墙集群id
    * ipsCfwId  cfw侧自定义ips规则id
    * ipsId  山石侧规则id
    * ipsName  ips规则名称
    * protocol  协议
    * severity  严重程度（critical：致命，high：高危，medium:中危，low:低危）
    * software  影响软件
    * srcPortType  源端口类型
    * srcPorts  源端口
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => 'int32',
        'affectedOs' => 'int32',
        'attackType' => 'int32',
        'configStatus' => 'int32',
        'content' => null,
        'dstPortType' => 'int32',
        'dstPorts' => null,
        'groupId' => null,
        'ipsCfwId' => null,
        'ipsId' => null,
        'ipsName' => null,
        'protocol' => 'int32',
        'severity' => 'int32',
        'software' => 'int32',
        'srcPortType' => 'int32',
        'srcPorts' => null
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
    * action  动作（0：只记录日志，1：重置/拦截）
    * affectedOs  操作系统
    * attackType  攻击类型
    * configStatus  规则状态（0：初始化，1：配置中，2：配置成功，3：配置失败）
    * content  内容json存储
    * dstPortType  目的端口类型
    * dstPorts  目的端口
    * groupId  防火墙集群id
    * ipsCfwId  cfw侧自定义ips规则id
    * ipsId  山石侧规则id
    * ipsName  ips规则名称
    * protocol  协议
    * severity  严重程度（critical：致命，high：高危，medium:中危，low:低危）
    * software  影响软件
    * srcPortType  源端口类型
    * srcPorts  源端口
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'affectedOs' => 'affected_os',
            'attackType' => 'attack_type',
            'configStatus' => 'config_status',
            'content' => 'content',
            'dstPortType' => 'dst_port_type',
            'dstPorts' => 'dst_ports',
            'groupId' => 'group_id',
            'ipsCfwId' => 'ips_cfw_id',
            'ipsId' => 'ips_id',
            'ipsName' => 'ips_name',
            'protocol' => 'protocol',
            'severity' => 'severity',
            'software' => 'software',
            'srcPortType' => 'src_port_type',
            'srcPorts' => 'src_ports'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  动作（0：只记录日志，1：重置/拦截）
    * affectedOs  操作系统
    * attackType  攻击类型
    * configStatus  规则状态（0：初始化，1：配置中，2：配置成功，3：配置失败）
    * content  内容json存储
    * dstPortType  目的端口类型
    * dstPorts  目的端口
    * groupId  防火墙集群id
    * ipsCfwId  cfw侧自定义ips规则id
    * ipsId  山石侧规则id
    * ipsName  ips规则名称
    * protocol  协议
    * severity  严重程度（critical：致命，high：高危，medium:中危，low:低危）
    * software  影响软件
    * srcPortType  源端口类型
    * srcPorts  源端口
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'affectedOs' => 'setAffectedOs',
            'attackType' => 'setAttackType',
            'configStatus' => 'setConfigStatus',
            'content' => 'setContent',
            'dstPortType' => 'setDstPortType',
            'dstPorts' => 'setDstPorts',
            'groupId' => 'setGroupId',
            'ipsCfwId' => 'setIpsCfwId',
            'ipsId' => 'setIpsId',
            'ipsName' => 'setIpsName',
            'protocol' => 'setProtocol',
            'severity' => 'setSeverity',
            'software' => 'setSoftware',
            'srcPortType' => 'setSrcPortType',
            'srcPorts' => 'setSrcPorts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  动作（0：只记录日志，1：重置/拦截）
    * affectedOs  操作系统
    * attackType  攻击类型
    * configStatus  规则状态（0：初始化，1：配置中，2：配置成功，3：配置失败）
    * content  内容json存储
    * dstPortType  目的端口类型
    * dstPorts  目的端口
    * groupId  防火墙集群id
    * ipsCfwId  cfw侧自定义ips规则id
    * ipsId  山石侧规则id
    * ipsName  ips规则名称
    * protocol  协议
    * severity  严重程度（critical：致命，high：高危，medium:中危，low:低危）
    * software  影响软件
    * srcPortType  源端口类型
    * srcPorts  源端口
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'affectedOs' => 'getAffectedOs',
            'attackType' => 'getAttackType',
            'configStatus' => 'getConfigStatus',
            'content' => 'getContent',
            'dstPortType' => 'getDstPortType',
            'dstPorts' => 'getDstPorts',
            'groupId' => 'getGroupId',
            'ipsCfwId' => 'getIpsCfwId',
            'ipsId' => 'getIpsId',
            'ipsName' => 'getIpsName',
            'protocol' => 'getProtocol',
            'severity' => 'getSeverity',
            'software' => 'getSoftware',
            'srcPortType' => 'getSrcPortType',
            'srcPorts' => 'getSrcPorts'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['affectedOs'] = isset($data['affectedOs']) ? $data['affectedOs'] : null;
        $this->container['attackType'] = isset($data['attackType']) ? $data['attackType'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['dstPortType'] = isset($data['dstPortType']) ? $data['dstPortType'] : null;
        $this->container['dstPorts'] = isset($data['dstPorts']) ? $data['dstPorts'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['ipsCfwId'] = isset($data['ipsCfwId']) ? $data['ipsCfwId'] : null;
        $this->container['ipsId'] = isset($data['ipsId']) ? $data['ipsId'] : null;
        $this->container['ipsName'] = isset($data['ipsName']) ? $data['ipsName'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['software'] = isset($data['software']) ? $data['software'] : null;
        $this->container['srcPortType'] = isset($data['srcPortType']) ? $data['srcPortType'] : null;
        $this->container['srcPorts'] = isset($data['srcPorts']) ? $data['srcPorts'] : null;
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
    * Gets action
    *  动作（0：只记录日志，1：重置/拦截）
    *
    * @return int|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param int|null $action 动作（0：只记录日志，1：重置/拦截）
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets affectedOs
    *  操作系统
    *
    * @return int|null
    */
    public function getAffectedOs()
    {
        return $this->container['affectedOs'];
    }

    /**
    * Sets affectedOs
    *
    * @param int|null $affectedOs 操作系统
    *
    * @return $this
    */
    public function setAffectedOs($affectedOs)
    {
        $this->container['affectedOs'] = $affectedOs;
        return $this;
    }

    /**
    * Gets attackType
    *  攻击类型
    *
    * @return int|null
    */
    public function getAttackType()
    {
        return $this->container['attackType'];
    }

    /**
    * Sets attackType
    *
    * @param int|null $attackType 攻击类型
    *
    * @return $this
    */
    public function setAttackType($attackType)
    {
        $this->container['attackType'] = $attackType;
        return $this;
    }

    /**
    * Gets configStatus
    *  规则状态（0：初始化，1：配置中，2：配置成功，3：配置失败）
    *
    * @return int|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param int|null $configStatus 规则状态（0：初始化，1：配置中，2：配置成功，3：配置失败）
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets content
    *  内容json存储
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 内容json存储
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets dstPortType
    *  目的端口类型
    *
    * @return int|null
    */
    public function getDstPortType()
    {
        return $this->container['dstPortType'];
    }

    /**
    * Sets dstPortType
    *
    * @param int|null $dstPortType 目的端口类型
    *
    * @return $this
    */
    public function setDstPortType($dstPortType)
    {
        $this->container['dstPortType'] = $dstPortType;
        return $this;
    }

    /**
    * Gets dstPorts
    *  目的端口
    *
    * @return string|null
    */
    public function getDstPorts()
    {
        return $this->container['dstPorts'];
    }

    /**
    * Sets dstPorts
    *
    * @param string|null $dstPorts 目的端口
    *
    * @return $this
    */
    public function setDstPorts($dstPorts)
    {
        $this->container['dstPorts'] = $dstPorts;
        return $this;
    }

    /**
    * Gets groupId
    *  防火墙集群id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 防火墙集群id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets ipsCfwId
    *  cfw侧自定义ips规则id
    *
    * @return string|null
    */
    public function getIpsCfwId()
    {
        return $this->container['ipsCfwId'];
    }

    /**
    * Sets ipsCfwId
    *
    * @param string|null $ipsCfwId cfw侧自定义ips规则id
    *
    * @return $this
    */
    public function setIpsCfwId($ipsCfwId)
    {
        $this->container['ipsCfwId'] = $ipsCfwId;
        return $this;
    }

    /**
    * Gets ipsId
    *  山石侧规则id
    *
    * @return string|null
    */
    public function getIpsId()
    {
        return $this->container['ipsId'];
    }

    /**
    * Sets ipsId
    *
    * @param string|null $ipsId 山石侧规则id
    *
    * @return $this
    */
    public function setIpsId($ipsId)
    {
        $this->container['ipsId'] = $ipsId;
        return $this;
    }

    /**
    * Gets ipsName
    *  ips规则名称
    *
    * @return string|null
    */
    public function getIpsName()
    {
        return $this->container['ipsName'];
    }

    /**
    * Sets ipsName
    *
    * @param string|null $ipsName ips规则名称
    *
    * @return $this
    */
    public function setIpsName($ipsName)
    {
        $this->container['ipsName'] = $ipsName;
        return $this;
    }

    /**
    * Gets protocol
    *  协议
    *
    * @return int|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param int|null $protocol 协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets severity
    *  严重程度（critical：致命，high：高危，medium:中危，low:低危）
    *
    * @return int|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param int|null $severity 严重程度（critical：致命，high：高危，medium:中危，low:低危）
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets software
    *  影响软件
    *
    * @return int|null
    */
    public function getSoftware()
    {
        return $this->container['software'];
    }

    /**
    * Sets software
    *
    * @param int|null $software 影响软件
    *
    * @return $this
    */
    public function setSoftware($software)
    {
        $this->container['software'] = $software;
        return $this;
    }

    /**
    * Gets srcPortType
    *  源端口类型
    *
    * @return int|null
    */
    public function getSrcPortType()
    {
        return $this->container['srcPortType'];
    }

    /**
    * Sets srcPortType
    *
    * @param int|null $srcPortType 源端口类型
    *
    * @return $this
    */
    public function setSrcPortType($srcPortType)
    {
        $this->container['srcPortType'] = $srcPortType;
        return $this;
    }

    /**
    * Gets srcPorts
    *  源端口
    *
    * @return string|null
    */
    public function getSrcPorts()
    {
        return $this->container['srcPorts'];
    }

    /**
    * Sets srcPorts
    *
    * @param string|null $srcPorts 源端口
    *
    * @return $this
    */
    public function setSrcPorts($srcPorts)
    {
        $this->container['srcPorts'] = $srcPorts;
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

