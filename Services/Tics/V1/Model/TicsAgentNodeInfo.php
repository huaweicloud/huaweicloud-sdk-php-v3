<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicsAgentNodeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicsAgentNodeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agentId  可信节点Id
    * agentVpcepEpsId  无eip场景下,agent的eps id
    * ecsServerId  弹性云服务器Id，IEF部署同node_id
    * leagueServerIpSecurityGroupRule  入方向安全组规则ID
    * leagueServerSnatIp  联盟server组件的ip，为server的snatip，设置代理节点的入方向安全组规则
    * natEip  可信节点绑定的网关的ip，CCE部署时会返回该值
    * natEipId  可信节点绑定的网关的ip的Id，CCE部署时会返回该值
    * nodeAz  弹性云服务器所在可用区，CCE部署时会返回该值
    * nodeId  可信节点部署的虚机id，CCE部署情况返回CCE节点ID。
    * nodeIp  弹性云服务器的私网ip
    * nodeName  弹性云服务器的名称
    * serverToAgentVpcepEpiId  无eip场景下,server访问agent的epi id
    * serverToAgentVpcepEpiIp  无eip场景下,server访问agent的ip
    * snatRuleId  节点绑定的snat id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agentId' => 'string',
            'agentVpcepEpsId' => 'string',
            'ecsServerId' => 'string',
            'leagueServerIpSecurityGroupRule' => 'string',
            'leagueServerSnatIp' => 'string',
            'natEip' => 'string',
            'natEipId' => 'string',
            'nodeAz' => 'string',
            'nodeId' => 'string',
            'nodeIp' => 'string',
            'nodeName' => 'string',
            'serverToAgentVpcepEpiId' => 'string',
            'serverToAgentVpcepEpiIp' => 'string',
            'snatRuleId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agentId  可信节点Id
    * agentVpcepEpsId  无eip场景下,agent的eps id
    * ecsServerId  弹性云服务器Id，IEF部署同node_id
    * leagueServerIpSecurityGroupRule  入方向安全组规则ID
    * leagueServerSnatIp  联盟server组件的ip，为server的snatip，设置代理节点的入方向安全组规则
    * natEip  可信节点绑定的网关的ip，CCE部署时会返回该值
    * natEipId  可信节点绑定的网关的ip的Id，CCE部署时会返回该值
    * nodeAz  弹性云服务器所在可用区，CCE部署时会返回该值
    * nodeId  可信节点部署的虚机id，CCE部署情况返回CCE节点ID。
    * nodeIp  弹性云服务器的私网ip
    * nodeName  弹性云服务器的名称
    * serverToAgentVpcepEpiId  无eip场景下,server访问agent的epi id
    * serverToAgentVpcepEpiIp  无eip场景下,server访问agent的ip
    * snatRuleId  节点绑定的snat id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agentId' => null,
        'agentVpcepEpsId' => null,
        'ecsServerId' => null,
        'leagueServerIpSecurityGroupRule' => null,
        'leagueServerSnatIp' => null,
        'natEip' => null,
        'natEipId' => null,
        'nodeAz' => null,
        'nodeId' => null,
        'nodeIp' => null,
        'nodeName' => null,
        'serverToAgentVpcepEpiId' => null,
        'serverToAgentVpcepEpiIp' => null,
        'snatRuleId' => null
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
    * agentId  可信节点Id
    * agentVpcepEpsId  无eip场景下,agent的eps id
    * ecsServerId  弹性云服务器Id，IEF部署同node_id
    * leagueServerIpSecurityGroupRule  入方向安全组规则ID
    * leagueServerSnatIp  联盟server组件的ip，为server的snatip，设置代理节点的入方向安全组规则
    * natEip  可信节点绑定的网关的ip，CCE部署时会返回该值
    * natEipId  可信节点绑定的网关的ip的Id，CCE部署时会返回该值
    * nodeAz  弹性云服务器所在可用区，CCE部署时会返回该值
    * nodeId  可信节点部署的虚机id，CCE部署情况返回CCE节点ID。
    * nodeIp  弹性云服务器的私网ip
    * nodeName  弹性云服务器的名称
    * serverToAgentVpcepEpiId  无eip场景下,server访问agent的epi id
    * serverToAgentVpcepEpiIp  无eip场景下,server访问agent的ip
    * snatRuleId  节点绑定的snat id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agentId' => 'agent_id',
            'agentVpcepEpsId' => 'agent_vpcep_eps_id',
            'ecsServerId' => 'ecs_server_id',
            'leagueServerIpSecurityGroupRule' => 'league_server_ip_security_group_rule',
            'leagueServerSnatIp' => 'league_server_snat_ip',
            'natEip' => 'nat_eip',
            'natEipId' => 'nat_eip_id',
            'nodeAz' => 'node_az',
            'nodeId' => 'node_id',
            'nodeIp' => 'node_ip',
            'nodeName' => 'node_name',
            'serverToAgentVpcepEpiId' => 'server_to_agent_vpcep_epi_id',
            'serverToAgentVpcepEpiIp' => 'server_to_agent_vpcep_epi_ip',
            'snatRuleId' => 'snat_rule_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agentId  可信节点Id
    * agentVpcepEpsId  无eip场景下,agent的eps id
    * ecsServerId  弹性云服务器Id，IEF部署同node_id
    * leagueServerIpSecurityGroupRule  入方向安全组规则ID
    * leagueServerSnatIp  联盟server组件的ip，为server的snatip，设置代理节点的入方向安全组规则
    * natEip  可信节点绑定的网关的ip，CCE部署时会返回该值
    * natEipId  可信节点绑定的网关的ip的Id，CCE部署时会返回该值
    * nodeAz  弹性云服务器所在可用区，CCE部署时会返回该值
    * nodeId  可信节点部署的虚机id，CCE部署情况返回CCE节点ID。
    * nodeIp  弹性云服务器的私网ip
    * nodeName  弹性云服务器的名称
    * serverToAgentVpcepEpiId  无eip场景下,server访问agent的epi id
    * serverToAgentVpcepEpiIp  无eip场景下,server访问agent的ip
    * snatRuleId  节点绑定的snat id
    *
    * @var string[]
    */
    protected static $setters = [
            'agentId' => 'setAgentId',
            'agentVpcepEpsId' => 'setAgentVpcepEpsId',
            'ecsServerId' => 'setEcsServerId',
            'leagueServerIpSecurityGroupRule' => 'setLeagueServerIpSecurityGroupRule',
            'leagueServerSnatIp' => 'setLeagueServerSnatIp',
            'natEip' => 'setNatEip',
            'natEipId' => 'setNatEipId',
            'nodeAz' => 'setNodeAz',
            'nodeId' => 'setNodeId',
            'nodeIp' => 'setNodeIp',
            'nodeName' => 'setNodeName',
            'serverToAgentVpcepEpiId' => 'setServerToAgentVpcepEpiId',
            'serverToAgentVpcepEpiIp' => 'setServerToAgentVpcepEpiIp',
            'snatRuleId' => 'setSnatRuleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agentId  可信节点Id
    * agentVpcepEpsId  无eip场景下,agent的eps id
    * ecsServerId  弹性云服务器Id，IEF部署同node_id
    * leagueServerIpSecurityGroupRule  入方向安全组规则ID
    * leagueServerSnatIp  联盟server组件的ip，为server的snatip，设置代理节点的入方向安全组规则
    * natEip  可信节点绑定的网关的ip，CCE部署时会返回该值
    * natEipId  可信节点绑定的网关的ip的Id，CCE部署时会返回该值
    * nodeAz  弹性云服务器所在可用区，CCE部署时会返回该值
    * nodeId  可信节点部署的虚机id，CCE部署情况返回CCE节点ID。
    * nodeIp  弹性云服务器的私网ip
    * nodeName  弹性云服务器的名称
    * serverToAgentVpcepEpiId  无eip场景下,server访问agent的epi id
    * serverToAgentVpcepEpiIp  无eip场景下,server访问agent的ip
    * snatRuleId  节点绑定的snat id
    *
    * @var string[]
    */
    protected static $getters = [
            'agentId' => 'getAgentId',
            'agentVpcepEpsId' => 'getAgentVpcepEpsId',
            'ecsServerId' => 'getEcsServerId',
            'leagueServerIpSecurityGroupRule' => 'getLeagueServerIpSecurityGroupRule',
            'leagueServerSnatIp' => 'getLeagueServerSnatIp',
            'natEip' => 'getNatEip',
            'natEipId' => 'getNatEipId',
            'nodeAz' => 'getNodeAz',
            'nodeId' => 'getNodeId',
            'nodeIp' => 'getNodeIp',
            'nodeName' => 'getNodeName',
            'serverToAgentVpcepEpiId' => 'getServerToAgentVpcepEpiId',
            'serverToAgentVpcepEpiIp' => 'getServerToAgentVpcepEpiIp',
            'snatRuleId' => 'getSnatRuleId'
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
        $this->container['agentId'] = isset($data['agentId']) ? $data['agentId'] : null;
        $this->container['agentVpcepEpsId'] = isset($data['agentVpcepEpsId']) ? $data['agentVpcepEpsId'] : null;
        $this->container['ecsServerId'] = isset($data['ecsServerId']) ? $data['ecsServerId'] : null;
        $this->container['leagueServerIpSecurityGroupRule'] = isset($data['leagueServerIpSecurityGroupRule']) ? $data['leagueServerIpSecurityGroupRule'] : null;
        $this->container['leagueServerSnatIp'] = isset($data['leagueServerSnatIp']) ? $data['leagueServerSnatIp'] : null;
        $this->container['natEip'] = isset($data['natEip']) ? $data['natEip'] : null;
        $this->container['natEipId'] = isset($data['natEipId']) ? $data['natEipId'] : null;
        $this->container['nodeAz'] = isset($data['nodeAz']) ? $data['nodeAz'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeIp'] = isset($data['nodeIp']) ? $data['nodeIp'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['serverToAgentVpcepEpiId'] = isset($data['serverToAgentVpcepEpiId']) ? $data['serverToAgentVpcepEpiId'] : null;
        $this->container['serverToAgentVpcepEpiIp'] = isset($data['serverToAgentVpcepEpiIp']) ? $data['serverToAgentVpcepEpiIp'] : null;
        $this->container['snatRuleId'] = isset($data['snatRuleId']) ? $data['snatRuleId'] : null;
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
    * Gets agentId
    *  可信节点Id
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
    * @param string|null $agentId 可信节点Id
    *
    * @return $this
    */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;
        return $this;
    }

    /**
    * Gets agentVpcepEpsId
    *  无eip场景下,agent的eps id
    *
    * @return string|null
    */
    public function getAgentVpcepEpsId()
    {
        return $this->container['agentVpcepEpsId'];
    }

    /**
    * Sets agentVpcepEpsId
    *
    * @param string|null $agentVpcepEpsId 无eip场景下,agent的eps id
    *
    * @return $this
    */
    public function setAgentVpcepEpsId($agentVpcepEpsId)
    {
        $this->container['agentVpcepEpsId'] = $agentVpcepEpsId;
        return $this;
    }

    /**
    * Gets ecsServerId
    *  弹性云服务器Id，IEF部署同node_id
    *
    * @return string|null
    */
    public function getEcsServerId()
    {
        return $this->container['ecsServerId'];
    }

    /**
    * Sets ecsServerId
    *
    * @param string|null $ecsServerId 弹性云服务器Id，IEF部署同node_id
    *
    * @return $this
    */
    public function setEcsServerId($ecsServerId)
    {
        $this->container['ecsServerId'] = $ecsServerId;
        return $this;
    }

    /**
    * Gets leagueServerIpSecurityGroupRule
    *  入方向安全组规则ID
    *
    * @return string|null
    */
    public function getLeagueServerIpSecurityGroupRule()
    {
        return $this->container['leagueServerIpSecurityGroupRule'];
    }

    /**
    * Sets leagueServerIpSecurityGroupRule
    *
    * @param string|null $leagueServerIpSecurityGroupRule 入方向安全组规则ID
    *
    * @return $this
    */
    public function setLeagueServerIpSecurityGroupRule($leagueServerIpSecurityGroupRule)
    {
        $this->container['leagueServerIpSecurityGroupRule'] = $leagueServerIpSecurityGroupRule;
        return $this;
    }

    /**
    * Gets leagueServerSnatIp
    *  联盟server组件的ip，为server的snatip，设置代理节点的入方向安全组规则
    *
    * @return string|null
    */
    public function getLeagueServerSnatIp()
    {
        return $this->container['leagueServerSnatIp'];
    }

    /**
    * Sets leagueServerSnatIp
    *
    * @param string|null $leagueServerSnatIp 联盟server组件的ip，为server的snatip，设置代理节点的入方向安全组规则
    *
    * @return $this
    */
    public function setLeagueServerSnatIp($leagueServerSnatIp)
    {
        $this->container['leagueServerSnatIp'] = $leagueServerSnatIp;
        return $this;
    }

    /**
    * Gets natEip
    *  可信节点绑定的网关的ip，CCE部署时会返回该值
    *
    * @return string|null
    */
    public function getNatEip()
    {
        return $this->container['natEip'];
    }

    /**
    * Sets natEip
    *
    * @param string|null $natEip 可信节点绑定的网关的ip，CCE部署时会返回该值
    *
    * @return $this
    */
    public function setNatEip($natEip)
    {
        $this->container['natEip'] = $natEip;
        return $this;
    }

    /**
    * Gets natEipId
    *  可信节点绑定的网关的ip的Id，CCE部署时会返回该值
    *
    * @return string|null
    */
    public function getNatEipId()
    {
        return $this->container['natEipId'];
    }

    /**
    * Sets natEipId
    *
    * @param string|null $natEipId 可信节点绑定的网关的ip的Id，CCE部署时会返回该值
    *
    * @return $this
    */
    public function setNatEipId($natEipId)
    {
        $this->container['natEipId'] = $natEipId;
        return $this;
    }

    /**
    * Gets nodeAz
    *  弹性云服务器所在可用区，CCE部署时会返回该值
    *
    * @return string|null
    */
    public function getNodeAz()
    {
        return $this->container['nodeAz'];
    }

    /**
    * Sets nodeAz
    *
    * @param string|null $nodeAz 弹性云服务器所在可用区，CCE部署时会返回该值
    *
    * @return $this
    */
    public function setNodeAz($nodeAz)
    {
        $this->container['nodeAz'] = $nodeAz;
        return $this;
    }

    /**
    * Gets nodeId
    *  可信节点部署的虚机id，CCE部署情况返回CCE节点ID。
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 可信节点部署的虚机id，CCE部署情况返回CCE节点ID。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeIp
    *  弹性云服务器的私网ip
    *
    * @return string|null
    */
    public function getNodeIp()
    {
        return $this->container['nodeIp'];
    }

    /**
    * Sets nodeIp
    *
    * @param string|null $nodeIp 弹性云服务器的私网ip
    *
    * @return $this
    */
    public function setNodeIp($nodeIp)
    {
        $this->container['nodeIp'] = $nodeIp;
        return $this;
    }

    /**
    * Gets nodeName
    *  弹性云服务器的名称
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 弹性云服务器的名称
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets serverToAgentVpcepEpiId
    *  无eip场景下,server访问agent的epi id
    *
    * @return string|null
    */
    public function getServerToAgentVpcepEpiId()
    {
        return $this->container['serverToAgentVpcepEpiId'];
    }

    /**
    * Sets serverToAgentVpcepEpiId
    *
    * @param string|null $serverToAgentVpcepEpiId 无eip场景下,server访问agent的epi id
    *
    * @return $this
    */
    public function setServerToAgentVpcepEpiId($serverToAgentVpcepEpiId)
    {
        $this->container['serverToAgentVpcepEpiId'] = $serverToAgentVpcepEpiId;
        return $this;
    }

    /**
    * Gets serverToAgentVpcepEpiIp
    *  无eip场景下,server访问agent的ip
    *
    * @return string|null
    */
    public function getServerToAgentVpcepEpiIp()
    {
        return $this->container['serverToAgentVpcepEpiIp'];
    }

    /**
    * Sets serverToAgentVpcepEpiIp
    *
    * @param string|null $serverToAgentVpcepEpiIp 无eip场景下,server访问agent的ip
    *
    * @return $this
    */
    public function setServerToAgentVpcepEpiIp($serverToAgentVpcepEpiIp)
    {
        $this->container['serverToAgentVpcepEpiIp'] = $serverToAgentVpcepEpiIp;
        return $this;
    }

    /**
    * Gets snatRuleId
    *  节点绑定的snat id
    *
    * @return string|null
    */
    public function getSnatRuleId()
    {
        return $this->container['snatRuleId'];
    }

    /**
    * Sets snatRuleId
    *
    * @param string|null $snatRuleId 节点绑定的snat id
    *
    * @return $this
    */
    public function setSnatRuleId($snatRuleId)
    {
        $this->container['snatRuleId'] = $snatRuleId;
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

