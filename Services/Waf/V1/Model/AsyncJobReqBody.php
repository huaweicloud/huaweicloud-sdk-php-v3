<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AsyncJobReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AsyncJobReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recent  **参数解释：** 查询日志的时间范围，如1day（1天）、1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ids  **参数解释：** 查询指定事件ID列表的日志，仅导出包含这些ID的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 查询不包含事件ID列表的日志，排除这些ID对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 查询指定攻击类型列表的日志，仅导出这些类型的攻击事件（如SQL注入、XSS等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nattacks  **参数解释：** 查询不包含攻击类型列表的日志，排除这些类型的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rules  **参数解释：** 查询指定命中的规则id列表的日志，仅导出命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 查询不包含命中的规则id列表的日志，排除命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 查询指定源ip(模糊查询)，导出包含该IP（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** 查询指定攻击的url(模糊查询)，导出包含该URL（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 查询指定源ip列表的日志，仅导出这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 查询不包含源ip列表的日志，排除这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** 查询指定攻击的url链接列表的日志，仅导出这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** 查询不包含攻击的url链接列表的日志，排除这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 查询指定防护动作列表的日志，仅导出执行这些动作的攻击事件（如block-拦截、log-日志） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nactions  **参数解释：** 查询不包含防护动作列表的日志，排除执行这些动作的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 查询指定host列表的日志，仅导出这些域名对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 查询指定instance列表的日志，仅导出这些实例对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dumpColumns  **参数解释：** 需要导出的列名称，指定攻击事件日志中需要导出的字段（如时间、事件ID、攻击类型等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recent' => 'string',
            'ids' => 'string[]',
            'nids' => 'string[]',
            'attacks' => 'string[]',
            'nattacks' => 'string[]',
            'rules' => 'string[]',
            'nrules' => 'string[]',
            'sip' => 'string',
            'url' => 'string',
            'sips' => 'string[]',
            'nsips' => 'string[]',
            'urls' => 'string[]',
            'nurls' => 'string[]',
            'actions' => 'string[]',
            'nactions' => 'string[]',
            'hosts' => 'string[]',
            'instances' => 'string[]',
            'dumpColumns' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recent  **参数解释：** 查询日志的时间范围，如1day（1天）、1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ids  **参数解释：** 查询指定事件ID列表的日志，仅导出包含这些ID的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 查询不包含事件ID列表的日志，排除这些ID对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 查询指定攻击类型列表的日志，仅导出这些类型的攻击事件（如SQL注入、XSS等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nattacks  **参数解释：** 查询不包含攻击类型列表的日志，排除这些类型的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rules  **参数解释：** 查询指定命中的规则id列表的日志，仅导出命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 查询不包含命中的规则id列表的日志，排除命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 查询指定源ip(模糊查询)，导出包含该IP（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** 查询指定攻击的url(模糊查询)，导出包含该URL（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 查询指定源ip列表的日志，仅导出这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 查询不包含源ip列表的日志，排除这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** 查询指定攻击的url链接列表的日志，仅导出这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** 查询不包含攻击的url链接列表的日志，排除这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 查询指定防护动作列表的日志，仅导出执行这些动作的攻击事件（如block-拦截、log-日志） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nactions  **参数解释：** 查询不包含防护动作列表的日志，排除执行这些动作的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 查询指定host列表的日志，仅导出这些域名对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 查询指定instance列表的日志，仅导出这些实例对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dumpColumns  **参数解释：** 需要导出的列名称，指定攻击事件日志中需要导出的字段（如时间、事件ID、攻击类型等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recent' => null,
        'ids' => null,
        'nids' => null,
        'attacks' => null,
        'nattacks' => null,
        'rules' => null,
        'nrules' => null,
        'sip' => null,
        'url' => null,
        'sips' => null,
        'nsips' => null,
        'urls' => null,
        'nurls' => null,
        'actions' => null,
        'nactions' => null,
        'hosts' => null,
        'instances' => null,
        'dumpColumns' => null
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
    * recent  **参数解释：** 查询日志的时间范围，如1day（1天）、1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ids  **参数解释：** 查询指定事件ID列表的日志，仅导出包含这些ID的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 查询不包含事件ID列表的日志，排除这些ID对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 查询指定攻击类型列表的日志，仅导出这些类型的攻击事件（如SQL注入、XSS等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nattacks  **参数解释：** 查询不包含攻击类型列表的日志，排除这些类型的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rules  **参数解释：** 查询指定命中的规则id列表的日志，仅导出命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 查询不包含命中的规则id列表的日志，排除命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 查询指定源ip(模糊查询)，导出包含该IP（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** 查询指定攻击的url(模糊查询)，导出包含该URL（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 查询指定源ip列表的日志，仅导出这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 查询不包含源ip列表的日志，排除这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** 查询指定攻击的url链接列表的日志，仅导出这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** 查询不包含攻击的url链接列表的日志，排除这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 查询指定防护动作列表的日志，仅导出执行这些动作的攻击事件（如block-拦截、log-日志） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nactions  **参数解释：** 查询不包含防护动作列表的日志，排除执行这些动作的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 查询指定host列表的日志，仅导出这些域名对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 查询指定instance列表的日志，仅导出这些实例对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dumpColumns  **参数解释：** 需要导出的列名称，指定攻击事件日志中需要导出的字段（如时间、事件ID、攻击类型等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recent' => 'recent',
            'ids' => 'ids',
            'nids' => 'nids',
            'attacks' => 'attacks',
            'nattacks' => 'nattacks',
            'rules' => 'rules',
            'nrules' => 'nrules',
            'sip' => 'sip',
            'url' => 'url',
            'sips' => 'sips',
            'nsips' => 'nsips',
            'urls' => 'urls',
            'nurls' => 'nurls',
            'actions' => 'actions',
            'nactions' => 'nactions',
            'hosts' => 'hosts',
            'instances' => 'instances',
            'dumpColumns' => 'dump_columns'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recent  **参数解释：** 查询日志的时间范围，如1day（1天）、1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ids  **参数解释：** 查询指定事件ID列表的日志，仅导出包含这些ID的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 查询不包含事件ID列表的日志，排除这些ID对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 查询指定攻击类型列表的日志，仅导出这些类型的攻击事件（如SQL注入、XSS等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nattacks  **参数解释：** 查询不包含攻击类型列表的日志，排除这些类型的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rules  **参数解释：** 查询指定命中的规则id列表的日志，仅导出命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 查询不包含命中的规则id列表的日志，排除命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 查询指定源ip(模糊查询)，导出包含该IP（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** 查询指定攻击的url(模糊查询)，导出包含该URL（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 查询指定源ip列表的日志，仅导出这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 查询不包含源ip列表的日志，排除这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** 查询指定攻击的url链接列表的日志，仅导出这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** 查询不包含攻击的url链接列表的日志，排除这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 查询指定防护动作列表的日志，仅导出执行这些动作的攻击事件（如block-拦截、log-日志） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nactions  **参数解释：** 查询不包含防护动作列表的日志，排除执行这些动作的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 查询指定host列表的日志，仅导出这些域名对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 查询指定instance列表的日志，仅导出这些实例对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dumpColumns  **参数解释：** 需要导出的列名称，指定攻击事件日志中需要导出的字段（如时间、事件ID、攻击类型等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'recent' => 'setRecent',
            'ids' => 'setIds',
            'nids' => 'setNids',
            'attacks' => 'setAttacks',
            'nattacks' => 'setNattacks',
            'rules' => 'setRules',
            'nrules' => 'setNrules',
            'sip' => 'setSip',
            'url' => 'setUrl',
            'sips' => 'setSips',
            'nsips' => 'setNsips',
            'urls' => 'setUrls',
            'nurls' => 'setNurls',
            'actions' => 'setActions',
            'nactions' => 'setNactions',
            'hosts' => 'setHosts',
            'instances' => 'setInstances',
            'dumpColumns' => 'setDumpColumns'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recent  **参数解释：** 查询日志的时间范围，如1day（1天）、1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ids  **参数解释：** 查询指定事件ID列表的日志，仅导出包含这些ID的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nids  **参数解释：** 查询不包含事件ID列表的日志，排除这些ID对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * attacks  **参数解释：** 查询指定攻击类型列表的日志，仅导出这些类型的攻击事件（如SQL注入、XSS等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nattacks  **参数解释：** 查询不包含攻击类型列表的日志，排除这些类型的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * rules  **参数解释：** 查询指定命中的规则id列表的日志，仅导出命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nrules  **参数解释：** 查询不包含命中的规则id列表的日志，排除命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sip  **参数解释：** 查询指定源ip(模糊查询)，导出包含该IP（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * url  **参数解释：** 查询指定攻击的url(模糊查询)，导出包含该URL（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * sips  **参数解释：** 查询指定源ip列表的日志，仅导出这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nsips  **参数解释：** 查询不包含源ip列表的日志，排除这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * urls  **参数解释：** 查询指定攻击的url链接列表的日志，仅导出这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nurls  **参数解释：** 查询不包含攻击的url链接列表的日志，排除这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * actions  **参数解释：** 查询指定防护动作列表的日志，仅导出执行这些动作的攻击事件（如block-拦截、log-日志） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * nactions  **参数解释：** 查询不包含防护动作列表的日志，排除执行这些动作的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  **参数解释：** 查询指定host列表的日志，仅导出这些域名对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * instances  **参数解释：** 查询指定instance列表的日志，仅导出这些实例对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * dumpColumns  **参数解释：** 需要导出的列名称，指定攻击事件日志中需要导出的字段（如时间、事件ID、攻击类型等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'recent' => 'getRecent',
            'ids' => 'getIds',
            'nids' => 'getNids',
            'attacks' => 'getAttacks',
            'nattacks' => 'getNattacks',
            'rules' => 'getRules',
            'nrules' => 'getNrules',
            'sip' => 'getSip',
            'url' => 'getUrl',
            'sips' => 'getSips',
            'nsips' => 'getNsips',
            'urls' => 'getUrls',
            'nurls' => 'getNurls',
            'actions' => 'getActions',
            'nactions' => 'getNactions',
            'hosts' => 'getHosts',
            'instances' => 'getInstances',
            'dumpColumns' => 'getDumpColumns'
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
        $this->container['recent'] = isset($data['recent']) ? $data['recent'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['nids'] = isset($data['nids']) ? $data['nids'] : null;
        $this->container['attacks'] = isset($data['attacks']) ? $data['attacks'] : null;
        $this->container['nattacks'] = isset($data['nattacks']) ? $data['nattacks'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['nrules'] = isset($data['nrules']) ? $data['nrules'] : null;
        $this->container['sip'] = isset($data['sip']) ? $data['sip'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['sips'] = isset($data['sips']) ? $data['sips'] : null;
        $this->container['nsips'] = isset($data['nsips']) ? $data['nsips'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
        $this->container['nurls'] = isset($data['nurls']) ? $data['nurls'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['nactions'] = isset($data['nactions']) ? $data['nactions'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
        $this->container['dumpColumns'] = isset($data['dumpColumns']) ? $data['dumpColumns'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['recent'] === null) {
            $invalidProperties[] = "'recent' can't be null";
        }
        if ($this->container['dumpColumns'] === null) {
            $invalidProperties[] = "'dumpColumns' can't be null";
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
    * Gets recent
    *  **参数解释：** 查询日志的时间范围，如1day（1天）、1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getRecent()
    {
        return $this->container['recent'];
    }

    /**
    * Sets recent
    *
    * @param string $recent **参数解释：** 查询日志的时间范围，如1day（1天）、1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRecent($recent)
    {
        $this->container['recent'] = $recent;
        return $this;
    }

    /**
    * Gets ids
    *  **参数解释：** 查询指定事件ID列表的日志，仅导出包含这些ID的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[]|null $ids **参数解释：** 查询指定事件ID列表的日志，仅导出包含这些ID的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets nids
    *  **参数解释：** 查询不包含事件ID列表的日志，排除这些ID对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNids()
    {
        return $this->container['nids'];
    }

    /**
    * Sets nids
    *
    * @param string[]|null $nids **参数解释：** 查询不包含事件ID列表的日志，排除这些ID对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNids($nids)
    {
        $this->container['nids'] = $nids;
        return $this;
    }

    /**
    * Gets attacks
    *  **参数解释：** 查询指定攻击类型列表的日志，仅导出这些类型的攻击事件（如SQL注入、XSS等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getAttacks()
    {
        return $this->container['attacks'];
    }

    /**
    * Sets attacks
    *
    * @param string[]|null $attacks **参数解释：** 查询指定攻击类型列表的日志，仅导出这些类型的攻击事件（如SQL注入、XSS等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAttacks($attacks)
    {
        $this->container['attacks'] = $attacks;
        return $this;
    }

    /**
    * Gets nattacks
    *  **参数解释：** 查询不包含攻击类型列表的日志，排除这些类型的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNattacks()
    {
        return $this->container['nattacks'];
    }

    /**
    * Sets nattacks
    *
    * @param string[]|null $nattacks **参数解释：** 查询不包含攻击类型列表的日志，排除这些类型的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNattacks($nattacks)
    {
        $this->container['nattacks'] = $nattacks;
        return $this;
    }

    /**
    * Gets rules
    *  **参数解释：** 查询指定命中的规则id列表的日志，仅导出命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param string[]|null $rules **参数解释：** 查询指定命中的规则id列表的日志，仅导出命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets nrules
    *  **参数解释：** 查询不包含命中的规则id列表的日志，排除命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNrules()
    {
        return $this->container['nrules'];
    }

    /**
    * Sets nrules
    *
    * @param string[]|null $nrules **参数解释：** 查询不包含命中的规则id列表的日志，排除命中这些规则的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNrules($nrules)
    {
        $this->container['nrules'] = $nrules;
        return $this;
    }

    /**
    * Gets sip
    *  **参数解释：** 查询指定源ip(模糊查询)，导出包含该IP（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getSip()
    {
        return $this->container['sip'];
    }

    /**
    * Sets sip
    *
    * @param string|null $sip **参数解释：** 查询指定源ip(模糊查询)，导出包含该IP（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSip($sip)
    {
        $this->container['sip'] = $sip;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释：** 查询指定攻击的url(模糊查询)，导出包含该URL（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url **参数解释：** 查询指定攻击的url(模糊查询)，导出包含该URL（模糊匹配）的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets sips
    *  **参数解释：** 查询指定源ip列表的日志，仅导出这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getSips()
    {
        return $this->container['sips'];
    }

    /**
    * Sets sips
    *
    * @param string[]|null $sips **参数解释：** 查询指定源ip列表的日志，仅导出这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setSips($sips)
    {
        $this->container['sips'] = $sips;
        return $this;
    }

    /**
    * Gets nsips
    *  **参数解释：** 查询不包含源ip列表的日志，排除这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNsips()
    {
        return $this->container['nsips'];
    }

    /**
    * Sets nsips
    *
    * @param string[]|null $nsips **参数解释：** 查询不包含源ip列表的日志，排除这些IP对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNsips($nsips)
    {
        $this->container['nsips'] = $nsips;
        return $this;
    }

    /**
    * Gets urls
    *  **参数解释：** 查询指定攻击的url链接列表的日志，仅导出这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
    * Sets urls
    *
    * @param string[]|null $urls **参数解释：** 查询指定攻击的url链接列表的日志，仅导出这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;
        return $this;
    }

    /**
    * Gets nurls
    *  **参数解释：** 查询不包含攻击的url链接列表的日志，排除这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNurls()
    {
        return $this->container['nurls'];
    }

    /**
    * Sets nurls
    *
    * @param string[]|null $nurls **参数解释：** 查询不包含攻击的url链接列表的日志，排除这些URL对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNurls($nurls)
    {
        $this->container['nurls'] = $nurls;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释：** 查询指定防护动作列表的日志，仅导出执行这些动作的攻击事件（如block-拦截、log-日志） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions **参数解释：** 查询指定防护动作列表的日志，仅导出执行这些动作的攻击事件（如block-拦截、log-日志） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets nactions
    *  **参数解释：** 查询不包含防护动作列表的日志，排除执行这些动作的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getNactions()
    {
        return $this->container['nactions'];
    }

    /**
    * Sets nactions
    *
    * @param string[]|null $nactions **参数解释：** 查询不包含防护动作列表的日志，排除执行这些动作的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setNactions($nactions)
    {
        $this->container['nactions'] = $nactions;
        return $this;
    }

    /**
    * Gets hosts
    *  **参数解释：** 查询指定host列表的日志，仅导出这些域名对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string[]|null $hosts **参数解释：** 查询指定host列表的日志，仅导出这些域名对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets instances
    *  **参数解释：** 查询指定instance列表的日志，仅导出这些实例对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param string[]|null $instances **参数解释：** 查询指定instance列表的日志，仅导出这些实例对应的攻击事件 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
        return $this;
    }

    /**
    * Gets dumpColumns
    *  **参数解释：** 需要导出的列名称，指定攻击事件日志中需要导出的字段（如时间、事件ID、攻击类型等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]
    */
    public function getDumpColumns()
    {
        return $this->container['dumpColumns'];
    }

    /**
    * Sets dumpColumns
    *
    * @param string[] $dumpColumns **参数解释：** 需要导出的列名称，指定攻击事件日志中需要导出的字段（如时间、事件ID、攻击类型等） **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDumpColumns($dumpColumns)
    {
        $this->container['dumpColumns'] = $dumpColumns;
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

