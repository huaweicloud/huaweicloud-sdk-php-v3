<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessTopVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessTopVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * denyTopOneAclId  **参数解释**： Top命中的阻断策略ID **取值范围**： 不涉及
    * denyTopOneAclName  **参数解释**： Top命中的阻断策略名称 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * in2outDenyDstIpList  **参数解释**： TOP出云阻断目的IP列表 **取值范围**： 不涉及
    * in2outDenyDstPortList  **参数解释**： TOP出云阻断端口列表 **取值范围**： 不涉及
    * in2outDenyDstRegionList  **参数解释**： TOP出云阻断目的地区列表 **取值范围**： 不涉及
    * in2outDenySrcIpList  **参数解释**： TOP出云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenyDstIpList  **参数解释**： TOP入云阻断目的IP列表 **取值范围**： 不涉及
    * out2inDenyDstPortList  **参数解释**： TOP入云阻断目的端口列表 **取值范围**： 不涉及
    * out2inDenySrcIpList  **参数解释**： TOP入云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenySrcPortList  **参数解释**： TOP入云阻断源端口列表 **取值范围**： 不涉及
    * out2inDenySrcRegionList  **参数解释**： TOP入云阻断源地区列表 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * permitTopOneAclId  **参数解释**： 高频命中的放行策略ID **取值范围**： 不涉及
    * permitTopOneAclName  **参数解释**： 高频命中的放行策略名称 **取值范围**： 不涉及
    * records  **参数解释**： 命中趋势 **取值范围**： 不涉及
    * topDenyRuleList  **参数解释**： TOP阻断规则列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'denyCount' => 'int',
            'denyTopOneAclId' => 'string',
            'denyTopOneAclName' => 'string',
            'hitCount' => 'int',
            'in2outDenyDstIpList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]',
            'in2outDenyDstPortList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]',
            'in2outDenyDstRegionList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]',
            'in2outDenySrcIpList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]',
            'out2inDenyDstIpList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]',
            'out2inDenyDstPortList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]',
            'out2inDenySrcIpList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]',
            'out2inDenySrcPortList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]',
            'out2inDenySrcRegionList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]',
            'permitCount' => 'int',
            'permitTopOneAclId' => 'string',
            'permitTopOneAclName' => 'string',
            'records' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopStatisticsVO[]',
            'topDenyRuleList' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * denyTopOneAclId  **参数解释**： Top命中的阻断策略ID **取值范围**： 不涉及
    * denyTopOneAclName  **参数解释**： Top命中的阻断策略名称 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * in2outDenyDstIpList  **参数解释**： TOP出云阻断目的IP列表 **取值范围**： 不涉及
    * in2outDenyDstPortList  **参数解释**： TOP出云阻断端口列表 **取值范围**： 不涉及
    * in2outDenyDstRegionList  **参数解释**： TOP出云阻断目的地区列表 **取值范围**： 不涉及
    * in2outDenySrcIpList  **参数解释**： TOP出云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenyDstIpList  **参数解释**： TOP入云阻断目的IP列表 **取值范围**： 不涉及
    * out2inDenyDstPortList  **参数解释**： TOP入云阻断目的端口列表 **取值范围**： 不涉及
    * out2inDenySrcIpList  **参数解释**： TOP入云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenySrcPortList  **参数解释**： TOP入云阻断源端口列表 **取值范围**： 不涉及
    * out2inDenySrcRegionList  **参数解释**： TOP入云阻断源地区列表 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * permitTopOneAclId  **参数解释**： 高频命中的放行策略ID **取值范围**： 不涉及
    * permitTopOneAclName  **参数解释**： 高频命中的放行策略名称 **取值范围**： 不涉及
    * records  **参数解释**： 命中趋势 **取值范围**： 不涉及
    * topDenyRuleList  **参数解释**： TOP阻断规则列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'denyCount' => 'int64',
        'denyTopOneAclId' => null,
        'denyTopOneAclName' => null,
        'hitCount' => 'int64',
        'in2outDenyDstIpList' => null,
        'in2outDenyDstPortList' => null,
        'in2outDenyDstRegionList' => null,
        'in2outDenySrcIpList' => null,
        'out2inDenyDstIpList' => null,
        'out2inDenyDstPortList' => null,
        'out2inDenySrcIpList' => null,
        'out2inDenySrcPortList' => null,
        'out2inDenySrcRegionList' => null,
        'permitCount' => 'int64',
        'permitTopOneAclId' => null,
        'permitTopOneAclName' => null,
        'records' => null,
        'topDenyRuleList' => null
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
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * denyTopOneAclId  **参数解释**： Top命中的阻断策略ID **取值范围**： 不涉及
    * denyTopOneAclName  **参数解释**： Top命中的阻断策略名称 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * in2outDenyDstIpList  **参数解释**： TOP出云阻断目的IP列表 **取值范围**： 不涉及
    * in2outDenyDstPortList  **参数解释**： TOP出云阻断端口列表 **取值范围**： 不涉及
    * in2outDenyDstRegionList  **参数解释**： TOP出云阻断目的地区列表 **取值范围**： 不涉及
    * in2outDenySrcIpList  **参数解释**： TOP出云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenyDstIpList  **参数解释**： TOP入云阻断目的IP列表 **取值范围**： 不涉及
    * out2inDenyDstPortList  **参数解释**： TOP入云阻断目的端口列表 **取值范围**： 不涉及
    * out2inDenySrcIpList  **参数解释**： TOP入云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenySrcPortList  **参数解释**： TOP入云阻断源端口列表 **取值范围**： 不涉及
    * out2inDenySrcRegionList  **参数解释**： TOP入云阻断源地区列表 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * permitTopOneAclId  **参数解释**： 高频命中的放行策略ID **取值范围**： 不涉及
    * permitTopOneAclName  **参数解释**： 高频命中的放行策略名称 **取值范围**： 不涉及
    * records  **参数解释**： 命中趋势 **取值范围**： 不涉及
    * topDenyRuleList  **参数解释**： TOP阻断规则列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'denyCount' => 'deny_count',
            'denyTopOneAclId' => 'deny_top_one_acl_id',
            'denyTopOneAclName' => 'deny_top_one_acl_name',
            'hitCount' => 'hit_count',
            'in2outDenyDstIpList' => 'in2out_deny_dst_ip_list',
            'in2outDenyDstPortList' => 'in2out_deny_dst_port_list',
            'in2outDenyDstRegionList' => 'in2out_deny_dst_region_list',
            'in2outDenySrcIpList' => 'in2out_deny_src_ip_list',
            'out2inDenyDstIpList' => 'out2in_deny_dst_ip_list',
            'out2inDenyDstPortList' => 'out2in_deny_dst_port_list',
            'out2inDenySrcIpList' => 'out2in_deny_src_ip_list',
            'out2inDenySrcPortList' => 'out2in_deny_src_port_list',
            'out2inDenySrcRegionList' => 'out2in_deny_src_region_list',
            'permitCount' => 'permit_count',
            'permitTopOneAclId' => 'permit_top_one_acl_id',
            'permitTopOneAclName' => 'permit_top_one_acl_name',
            'records' => 'records',
            'topDenyRuleList' => 'top_deny_rule_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * denyTopOneAclId  **参数解释**： Top命中的阻断策略ID **取值范围**： 不涉及
    * denyTopOneAclName  **参数解释**： Top命中的阻断策略名称 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * in2outDenyDstIpList  **参数解释**： TOP出云阻断目的IP列表 **取值范围**： 不涉及
    * in2outDenyDstPortList  **参数解释**： TOP出云阻断端口列表 **取值范围**： 不涉及
    * in2outDenyDstRegionList  **参数解释**： TOP出云阻断目的地区列表 **取值范围**： 不涉及
    * in2outDenySrcIpList  **参数解释**： TOP出云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenyDstIpList  **参数解释**： TOP入云阻断目的IP列表 **取值范围**： 不涉及
    * out2inDenyDstPortList  **参数解释**： TOP入云阻断目的端口列表 **取值范围**： 不涉及
    * out2inDenySrcIpList  **参数解释**： TOP入云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenySrcPortList  **参数解释**： TOP入云阻断源端口列表 **取值范围**： 不涉及
    * out2inDenySrcRegionList  **参数解释**： TOP入云阻断源地区列表 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * permitTopOneAclId  **参数解释**： 高频命中的放行策略ID **取值范围**： 不涉及
    * permitTopOneAclName  **参数解释**： 高频命中的放行策略名称 **取值范围**： 不涉及
    * records  **参数解释**： 命中趋势 **取值范围**： 不涉及
    * topDenyRuleList  **参数解释**： TOP阻断规则列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'denyCount' => 'setDenyCount',
            'denyTopOneAclId' => 'setDenyTopOneAclId',
            'denyTopOneAclName' => 'setDenyTopOneAclName',
            'hitCount' => 'setHitCount',
            'in2outDenyDstIpList' => 'setIn2outDenyDstIpList',
            'in2outDenyDstPortList' => 'setIn2outDenyDstPortList',
            'in2outDenyDstRegionList' => 'setIn2outDenyDstRegionList',
            'in2outDenySrcIpList' => 'setIn2outDenySrcIpList',
            'out2inDenyDstIpList' => 'setOut2inDenyDstIpList',
            'out2inDenyDstPortList' => 'setOut2inDenyDstPortList',
            'out2inDenySrcIpList' => 'setOut2inDenySrcIpList',
            'out2inDenySrcPortList' => 'setOut2inDenySrcPortList',
            'out2inDenySrcRegionList' => 'setOut2inDenySrcRegionList',
            'permitCount' => 'setPermitCount',
            'permitTopOneAclId' => 'setPermitTopOneAclId',
            'permitTopOneAclName' => 'setPermitTopOneAclName',
            'records' => 'setRecords',
            'topDenyRuleList' => 'setTopDenyRuleList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * denyCount  **参数解释**： 阻断次数 **取值范围**： 不涉及
    * denyTopOneAclId  **参数解释**： Top命中的阻断策略ID **取值范围**： 不涉及
    * denyTopOneAclName  **参数解释**： Top命中的阻断策略名称 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * in2outDenyDstIpList  **参数解释**： TOP出云阻断目的IP列表 **取值范围**： 不涉及
    * in2outDenyDstPortList  **参数解释**： TOP出云阻断端口列表 **取值范围**： 不涉及
    * in2outDenyDstRegionList  **参数解释**： TOP出云阻断目的地区列表 **取值范围**： 不涉及
    * in2outDenySrcIpList  **参数解释**： TOP出云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenyDstIpList  **参数解释**： TOP入云阻断目的IP列表 **取值范围**： 不涉及
    * out2inDenyDstPortList  **参数解释**： TOP入云阻断目的端口列表 **取值范围**： 不涉及
    * out2inDenySrcIpList  **参数解释**： TOP入云阻断源IP列表 **取值范围**： 不涉及
    * out2inDenySrcPortList  **参数解释**： TOP入云阻断源端口列表 **取值范围**： 不涉及
    * out2inDenySrcRegionList  **参数解释**： TOP入云阻断源地区列表 **取值范围**： 不涉及
    * permitCount  **参数解释**： 放行次数 **取值范围**： 不涉及
    * permitTopOneAclId  **参数解释**： 高频命中的放行策略ID **取值范围**： 不涉及
    * permitTopOneAclName  **参数解释**： 高频命中的放行策略名称 **取值范围**： 不涉及
    * records  **参数解释**： 命中趋势 **取值范围**： 不涉及
    * topDenyRuleList  **参数解释**： TOP阻断规则列表 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'denyCount' => 'getDenyCount',
            'denyTopOneAclId' => 'getDenyTopOneAclId',
            'denyTopOneAclName' => 'getDenyTopOneAclName',
            'hitCount' => 'getHitCount',
            'in2outDenyDstIpList' => 'getIn2outDenyDstIpList',
            'in2outDenyDstPortList' => 'getIn2outDenyDstPortList',
            'in2outDenyDstRegionList' => 'getIn2outDenyDstRegionList',
            'in2outDenySrcIpList' => 'getIn2outDenySrcIpList',
            'out2inDenyDstIpList' => 'getOut2inDenyDstIpList',
            'out2inDenyDstPortList' => 'getOut2inDenyDstPortList',
            'out2inDenySrcIpList' => 'getOut2inDenySrcIpList',
            'out2inDenySrcPortList' => 'getOut2inDenySrcPortList',
            'out2inDenySrcRegionList' => 'getOut2inDenySrcRegionList',
            'permitCount' => 'getPermitCount',
            'permitTopOneAclId' => 'getPermitTopOneAclId',
            'permitTopOneAclName' => 'getPermitTopOneAclName',
            'records' => 'getRecords',
            'topDenyRuleList' => 'getTopDenyRuleList'
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
        $this->container['denyCount'] = isset($data['denyCount']) ? $data['denyCount'] : null;
        $this->container['denyTopOneAclId'] = isset($data['denyTopOneAclId']) ? $data['denyTopOneAclId'] : null;
        $this->container['denyTopOneAclName'] = isset($data['denyTopOneAclName']) ? $data['denyTopOneAclName'] : null;
        $this->container['hitCount'] = isset($data['hitCount']) ? $data['hitCount'] : null;
        $this->container['in2outDenyDstIpList'] = isset($data['in2outDenyDstIpList']) ? $data['in2outDenyDstIpList'] : null;
        $this->container['in2outDenyDstPortList'] = isset($data['in2outDenyDstPortList']) ? $data['in2outDenyDstPortList'] : null;
        $this->container['in2outDenyDstRegionList'] = isset($data['in2outDenyDstRegionList']) ? $data['in2outDenyDstRegionList'] : null;
        $this->container['in2outDenySrcIpList'] = isset($data['in2outDenySrcIpList']) ? $data['in2outDenySrcIpList'] : null;
        $this->container['out2inDenyDstIpList'] = isset($data['out2inDenyDstIpList']) ? $data['out2inDenyDstIpList'] : null;
        $this->container['out2inDenyDstPortList'] = isset($data['out2inDenyDstPortList']) ? $data['out2inDenyDstPortList'] : null;
        $this->container['out2inDenySrcIpList'] = isset($data['out2inDenySrcIpList']) ? $data['out2inDenySrcIpList'] : null;
        $this->container['out2inDenySrcPortList'] = isset($data['out2inDenySrcPortList']) ? $data['out2inDenySrcPortList'] : null;
        $this->container['out2inDenySrcRegionList'] = isset($data['out2inDenySrcRegionList']) ? $data['out2inDenySrcRegionList'] : null;
        $this->container['permitCount'] = isset($data['permitCount']) ? $data['permitCount'] : null;
        $this->container['permitTopOneAclId'] = isset($data['permitTopOneAclId']) ? $data['permitTopOneAclId'] : null;
        $this->container['permitTopOneAclName'] = isset($data['permitTopOneAclName']) ? $data['permitTopOneAclName'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['topDenyRuleList'] = isset($data['topDenyRuleList']) ? $data['topDenyRuleList'] : null;
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
    * Gets denyCount
    *  **参数解释**： 阻断次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDenyCount()
    {
        return $this->container['denyCount'];
    }

    /**
    * Sets denyCount
    *
    * @param int|null $denyCount **参数解释**： 阻断次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDenyCount($denyCount)
    {
        $this->container['denyCount'] = $denyCount;
        return $this;
    }

    /**
    * Gets denyTopOneAclId
    *  **参数解释**： Top命中的阻断策略ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDenyTopOneAclId()
    {
        return $this->container['denyTopOneAclId'];
    }

    /**
    * Sets denyTopOneAclId
    *
    * @param string|null $denyTopOneAclId **参数解释**： Top命中的阻断策略ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDenyTopOneAclId($denyTopOneAclId)
    {
        $this->container['denyTopOneAclId'] = $denyTopOneAclId;
        return $this;
    }

    /**
    * Gets denyTopOneAclName
    *  **参数解释**： Top命中的阻断策略名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getDenyTopOneAclName()
    {
        return $this->container['denyTopOneAclName'];
    }

    /**
    * Sets denyTopOneAclName
    *
    * @param string|null $denyTopOneAclName **参数解释**： Top命中的阻断策略名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDenyTopOneAclName($denyTopOneAclName)
    {
        $this->container['denyTopOneAclName'] = $denyTopOneAclName;
        return $this;
    }

    /**
    * Gets hitCount
    *  **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getHitCount()
    {
        return $this->container['hitCount'];
    }

    /**
    * Sets hitCount
    *
    * @param int|null $hitCount **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHitCount($hitCount)
    {
        $this->container['hitCount'] = $hitCount;
        return $this;
    }

    /**
    * Gets in2outDenyDstIpList
    *  **参数解释**： TOP出云阻断目的IP列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getIn2outDenyDstIpList()
    {
        return $this->container['in2outDenyDstIpList'];
    }

    /**
    * Sets in2outDenyDstIpList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $in2outDenyDstIpList **参数解释**： TOP出云阻断目的IP列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIn2outDenyDstIpList($in2outDenyDstIpList)
    {
        $this->container['in2outDenyDstIpList'] = $in2outDenyDstIpList;
        return $this;
    }

    /**
    * Gets in2outDenyDstPortList
    *  **参数解释**： TOP出云阻断端口列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getIn2outDenyDstPortList()
    {
        return $this->container['in2outDenyDstPortList'];
    }

    /**
    * Sets in2outDenyDstPortList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $in2outDenyDstPortList **参数解释**： TOP出云阻断端口列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIn2outDenyDstPortList($in2outDenyDstPortList)
    {
        $this->container['in2outDenyDstPortList'] = $in2outDenyDstPortList;
        return $this;
    }

    /**
    * Gets in2outDenyDstRegionList
    *  **参数解释**： TOP出云阻断目的地区列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getIn2outDenyDstRegionList()
    {
        return $this->container['in2outDenyDstRegionList'];
    }

    /**
    * Sets in2outDenyDstRegionList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $in2outDenyDstRegionList **参数解释**： TOP出云阻断目的地区列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIn2outDenyDstRegionList($in2outDenyDstRegionList)
    {
        $this->container['in2outDenyDstRegionList'] = $in2outDenyDstRegionList;
        return $this;
    }

    /**
    * Gets in2outDenySrcIpList
    *  **参数解释**： TOP出云阻断源IP列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getIn2outDenySrcIpList()
    {
        return $this->container['in2outDenySrcIpList'];
    }

    /**
    * Sets in2outDenySrcIpList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $in2outDenySrcIpList **参数解释**： TOP出云阻断源IP列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIn2outDenySrcIpList($in2outDenySrcIpList)
    {
        $this->container['in2outDenySrcIpList'] = $in2outDenySrcIpList;
        return $this;
    }

    /**
    * Gets out2inDenyDstIpList
    *  **参数解释**： TOP入云阻断目的IP列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getOut2inDenyDstIpList()
    {
        return $this->container['out2inDenyDstIpList'];
    }

    /**
    * Sets out2inDenyDstIpList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $out2inDenyDstIpList **参数解释**： TOP入云阻断目的IP列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOut2inDenyDstIpList($out2inDenyDstIpList)
    {
        $this->container['out2inDenyDstIpList'] = $out2inDenyDstIpList;
        return $this;
    }

    /**
    * Gets out2inDenyDstPortList
    *  **参数解释**： TOP入云阻断目的端口列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getOut2inDenyDstPortList()
    {
        return $this->container['out2inDenyDstPortList'];
    }

    /**
    * Sets out2inDenyDstPortList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $out2inDenyDstPortList **参数解释**： TOP入云阻断目的端口列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOut2inDenyDstPortList($out2inDenyDstPortList)
    {
        $this->container['out2inDenyDstPortList'] = $out2inDenyDstPortList;
        return $this;
    }

    /**
    * Gets out2inDenySrcIpList
    *  **参数解释**： TOP入云阻断源IP列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getOut2inDenySrcIpList()
    {
        return $this->container['out2inDenySrcIpList'];
    }

    /**
    * Sets out2inDenySrcIpList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $out2inDenySrcIpList **参数解释**： TOP入云阻断源IP列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOut2inDenySrcIpList($out2inDenySrcIpList)
    {
        $this->container['out2inDenySrcIpList'] = $out2inDenySrcIpList;
        return $this;
    }

    /**
    * Gets out2inDenySrcPortList
    *  **参数解释**： TOP入云阻断源端口列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getOut2inDenySrcPortList()
    {
        return $this->container['out2inDenySrcPortList'];
    }

    /**
    * Sets out2inDenySrcPortList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $out2inDenySrcPortList **参数解释**： TOP入云阻断源端口列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOut2inDenySrcPortList($out2inDenySrcPortList)
    {
        $this->container['out2inDenySrcPortList'] = $out2inDenySrcPortList;
        return $this;
    }

    /**
    * Gets out2inDenySrcRegionList
    *  **参数解释**： TOP入云阻断源地区列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getOut2inDenySrcRegionList()
    {
        return $this->container['out2inDenySrcRegionList'];
    }

    /**
    * Sets out2inDenySrcRegionList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $out2inDenySrcRegionList **参数解释**： TOP入云阻断源地区列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOut2inDenySrcRegionList($out2inDenySrcRegionList)
    {
        $this->container['out2inDenySrcRegionList'] = $out2inDenySrcRegionList;
        return $this;
    }

    /**
    * Gets permitCount
    *  **参数解释**： 放行次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPermitCount()
    {
        return $this->container['permitCount'];
    }

    /**
    * Sets permitCount
    *
    * @param int|null $permitCount **参数解释**： 放行次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPermitCount($permitCount)
    {
        $this->container['permitCount'] = $permitCount;
        return $this;
    }

    /**
    * Gets permitTopOneAclId
    *  **参数解释**： 高频命中的放行策略ID **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPermitTopOneAclId()
    {
        return $this->container['permitTopOneAclId'];
    }

    /**
    * Sets permitTopOneAclId
    *
    * @param string|null $permitTopOneAclId **参数解释**： 高频命中的放行策略ID **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPermitTopOneAclId($permitTopOneAclId)
    {
        $this->container['permitTopOneAclId'] = $permitTopOneAclId;
        return $this;
    }

    /**
    * Gets permitTopOneAclName
    *  **参数解释**： 高频命中的放行策略名称 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getPermitTopOneAclName()
    {
        return $this->container['permitTopOneAclName'];
    }

    /**
    * Sets permitTopOneAclName
    *
    * @param string|null $permitTopOneAclName **参数解释**： 高频命中的放行策略名称 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPermitTopOneAclName($permitTopOneAclName)
    {
        $this->container['permitTopOneAclName'] = $permitTopOneAclName;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释**： 命中趋势 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopStatisticsVO[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopStatisticsVO[]|null $records **参数解释**： 命中趋势 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets topDenyRuleList
    *  **参数解释**： TOP阻断规则列表 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null
    */
    public function getTopDenyRuleList()
    {
        return $this->container['topDenyRuleList'];
    }

    /**
    * Sets topDenyRuleList
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessTopMemberVO[]|null $topDenyRuleList **参数解释**： TOP阻断规则列表 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTopDenyRuleList($topDenyRuleList)
    {
        $this->container['topDenyRuleList'] = $topDenyRuleList;
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

