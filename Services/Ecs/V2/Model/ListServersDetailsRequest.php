<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListServersDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListServersDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  查询绑定某个企业项目的弹性云服务器。  若需要查询当前用户所有企业项目绑定的弹性云服务，请传参all_granted_eps。
    * flavor  云服务器规格ID,已上线的规格请参见《弹性云服务器用户指南》的“实例和应用场景”章节。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器当前页面的大小。每页默认值是25，最多返回1000台云服务器的信息。
    * name  云服务器名称，匹配规则为模糊匹配。
    * notTags  查询tag字段中不包含该值的云服务器。
    * offset  页码。 当前页面数，默认为1，取值范围大于等于0。 当取值为0时，系统默认返回第1页，与取值为1时相同。 建议设置该参数大于等于1。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  只有管理员可以使用“deleted”状态过滤查询已经删除的弹性云服务器。  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * tags  查询tag字段中包含该值的云服务器。
    * ipEq  IPv4地址过滤结果，匹配规则为精确匹配。
    * serverId  云服务器ID，格式为UUID，匹配规则为精确匹配  示例: server_id={id1}&server_id={id2}  说明： 在使用server_id作为过滤条件时，不能同时使用其他过滤条件。如果同时指定server_id及其他过滤条件，则以server_id条件为准，其他过滤条件会被忽略 当server_id中含有不存在的云服务器ID时，返回的响应参数中该云服务器ID对应的servers结构体中除了id和fault其它字段均为null 为了避免API的URI过长，建议一次查询的server_id个数不超过100个
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'flavor' => 'string',
            'ip' => 'string',
            'limit' => 'int',
            'name' => 'string',
            'notTags' => 'string',
            'offset' => 'int',
            'reservationId' => 'string',
            'status' => 'string',
            'tags' => 'string',
            'ipEq' => 'string',
            'serverId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  查询绑定某个企业项目的弹性云服务器。  若需要查询当前用户所有企业项目绑定的弹性云服务，请传参all_granted_eps。
    * flavor  云服务器规格ID,已上线的规格请参见《弹性云服务器用户指南》的“实例和应用场景”章节。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器当前页面的大小。每页默认值是25，最多返回1000台云服务器的信息。
    * name  云服务器名称，匹配规则为模糊匹配。
    * notTags  查询tag字段中不包含该值的云服务器。
    * offset  页码。 当前页面数，默认为1，取值范围大于等于0。 当取值为0时，系统默认返回第1页，与取值为1时相同。 建议设置该参数大于等于1。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  只有管理员可以使用“deleted”状态过滤查询已经删除的弹性云服务器。  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * tags  查询tag字段中包含该值的云服务器。
    * ipEq  IPv4地址过滤结果，匹配规则为精确匹配。
    * serverId  云服务器ID，格式为UUID，匹配规则为精确匹配  示例: server_id={id1}&server_id={id2}  说明： 在使用server_id作为过滤条件时，不能同时使用其他过滤条件。如果同时指定server_id及其他过滤条件，则以server_id条件为准，其他过滤条件会被忽略 当server_id中含有不存在的云服务器ID时，返回的响应参数中该云服务器ID对应的servers结构体中除了id和fault其它字段均为null 为了避免API的URI过长，建议一次查询的server_id个数不超过100个
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'flavor' => null,
        'ip' => null,
        'limit' => 'int32',
        'name' => null,
        'notTags' => null,
        'offset' => 'int32',
        'reservationId' => null,
        'status' => null,
        'tags' => null,
        'ipEq' => null,
        'serverId' => null
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
    * enterpriseProjectId  查询绑定某个企业项目的弹性云服务器。  若需要查询当前用户所有企业项目绑定的弹性云服务，请传参all_granted_eps。
    * flavor  云服务器规格ID,已上线的规格请参见《弹性云服务器用户指南》的“实例和应用场景”章节。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器当前页面的大小。每页默认值是25，最多返回1000台云服务器的信息。
    * name  云服务器名称，匹配规则为模糊匹配。
    * notTags  查询tag字段中不包含该值的云服务器。
    * offset  页码。 当前页面数，默认为1，取值范围大于等于0。 当取值为0时，系统默认返回第1页，与取值为1时相同。 建议设置该参数大于等于1。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  只有管理员可以使用“deleted”状态过滤查询已经删除的弹性云服务器。  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * tags  查询tag字段中包含该值的云服务器。
    * ipEq  IPv4地址过滤结果，匹配规则为精确匹配。
    * serverId  云服务器ID，格式为UUID，匹配规则为精确匹配  示例: server_id={id1}&server_id={id2}  说明： 在使用server_id作为过滤条件时，不能同时使用其他过滤条件。如果同时指定server_id及其他过滤条件，则以server_id条件为准，其他过滤条件会被忽略 当server_id中含有不存在的云服务器ID时，返回的响应参数中该云服务器ID对应的servers结构体中除了id和fault其它字段均为null 为了避免API的URI过长，建议一次查询的server_id个数不超过100个
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'flavor' => 'flavor',
            'ip' => 'ip',
            'limit' => 'limit',
            'name' => 'name',
            'notTags' => 'not-tags',
            'offset' => 'offset',
            'reservationId' => 'reservation_id',
            'status' => 'status',
            'tags' => 'tags',
            'ipEq' => 'ip_eq',
            'serverId' => 'server_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  查询绑定某个企业项目的弹性云服务器。  若需要查询当前用户所有企业项目绑定的弹性云服务，请传参all_granted_eps。
    * flavor  云服务器规格ID,已上线的规格请参见《弹性云服务器用户指南》的“实例和应用场景”章节。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器当前页面的大小。每页默认值是25，最多返回1000台云服务器的信息。
    * name  云服务器名称，匹配规则为模糊匹配。
    * notTags  查询tag字段中不包含该值的云服务器。
    * offset  页码。 当前页面数，默认为1，取值范围大于等于0。 当取值为0时，系统默认返回第1页，与取值为1时相同。 建议设置该参数大于等于1。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  只有管理员可以使用“deleted”状态过滤查询已经删除的弹性云服务器。  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * tags  查询tag字段中包含该值的云服务器。
    * ipEq  IPv4地址过滤结果，匹配规则为精确匹配。
    * serverId  云服务器ID，格式为UUID，匹配规则为精确匹配  示例: server_id={id1}&server_id={id2}  说明： 在使用server_id作为过滤条件时，不能同时使用其他过滤条件。如果同时指定server_id及其他过滤条件，则以server_id条件为准，其他过滤条件会被忽略 当server_id中含有不存在的云服务器ID时，返回的响应参数中该云服务器ID对应的servers结构体中除了id和fault其它字段均为null 为了避免API的URI过长，建议一次查询的server_id个数不超过100个
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'flavor' => 'setFlavor',
            'ip' => 'setIp',
            'limit' => 'setLimit',
            'name' => 'setName',
            'notTags' => 'setNotTags',
            'offset' => 'setOffset',
            'reservationId' => 'setReservationId',
            'status' => 'setStatus',
            'tags' => 'setTags',
            'ipEq' => 'setIpEq',
            'serverId' => 'setServerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  查询绑定某个企业项目的弹性云服务器。  若需要查询当前用户所有企业项目绑定的弹性云服务，请传参all_granted_eps。
    * flavor  云服务器规格ID,已上线的规格请参见《弹性云服务器用户指南》的“实例和应用场景”章节。
    * ip  IPv4地址过滤结果，匹配规则为模糊匹配。
    * limit  查询返回云服务器当前页面的大小。每页默认值是25，最多返回1000台云服务器的信息。
    * name  云服务器名称，匹配规则为模糊匹配。
    * notTags  查询tag字段中不包含该值的云服务器。
    * offset  页码。 当前页面数，默认为1，取值范围大于等于0。 当取值为0时，系统默认返回第1页，与取值为1时相同。 建议设置该参数大于等于1。
    * reservationId  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    * status  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  只有管理员可以使用“deleted”状态过滤查询已经删除的弹性云服务器。  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    * tags  查询tag字段中包含该值的云服务器。
    * ipEq  IPv4地址过滤结果，匹配规则为精确匹配。
    * serverId  云服务器ID，格式为UUID，匹配规则为精确匹配  示例: server_id={id1}&server_id={id2}  说明： 在使用server_id作为过滤条件时，不能同时使用其他过滤条件。如果同时指定server_id及其他过滤条件，则以server_id条件为准，其他过滤条件会被忽略 当server_id中含有不存在的云服务器ID时，返回的响应参数中该云服务器ID对应的servers结构体中除了id和fault其它字段均为null 为了避免API的URI过长，建议一次查询的server_id个数不超过100个
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'flavor' => 'getFlavor',
            'ip' => 'getIp',
            'limit' => 'getLimit',
            'name' => 'getName',
            'notTags' => 'getNotTags',
            'offset' => 'getOffset',
            'reservationId' => 'getReservationId',
            'status' => 'getStatus',
            'tags' => 'getTags',
            'ipEq' => 'getIpEq',
            'serverId' => 'getServerId'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['reservationId'] = isset($data['reservationId']) ? $data['reservationId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['ipEq'] = isset($data['ipEq']) ? $data['ipEq'] : null;
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets enterpriseProjectId
    *  查询绑定某个企业项目的弹性云服务器。  若需要查询当前用户所有企业项目绑定的弹性云服务，请传参all_granted_eps。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 查询绑定某个企业项目的弹性云服务器。  若需要查询当前用户所有企业项目绑定的弹性云服务，请传参all_granted_eps。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets flavor
    *  云服务器规格ID,已上线的规格请参见《弹性云服务器用户指南》的“实例和应用场景”章节。
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 云服务器规格ID,已上线的规格请参见《弹性云服务器用户指南》的“实例和应用场景”章节。
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets ip
    *  IPv4地址过滤结果，匹配规则为模糊匹配。
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip IPv4地址过滤结果，匹配规则为模糊匹配。
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets limit
    *  查询返回云服务器当前页面的大小。每页默认值是25，最多返回1000台云服务器的信息。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询返回云服务器当前页面的大小。每页默认值是25，最多返回1000台云服务器的信息。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets name
    *  云服务器名称，匹配规则为模糊匹配。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 云服务器名称，匹配规则为模糊匹配。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets notTags
    *  查询tag字段中不包含该值的云服务器。
    *
    * @return string|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param string|null $notTags 查询tag字段中不包含该值的云服务器。
    *
    * @return $this
    */
    public function setNotTags($notTags)
    {
        $this->container['notTags'] = $notTags;
        return $this;
    }

    /**
    * Gets offset
    *  页码。 当前页面数，默认为1，取值范围大于等于0。 当取值为0时，系统默认返回第1页，与取值为1时相同。 建议设置该参数大于等于1。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 页码。 当前页面数，默认为1，取值范围大于等于0。 当取值为0时，系统默认返回第1页，与取值为1时相同。 建议设置该参数大于等于1。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets reservationId
    *  批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    *
    * @return string|null
    */
    public function getReservationId()
    {
        return $this->container['reservationId'];
    }

    /**
    * Sets reservationId
    *
    * @param string|null $reservationId 批量创建弹性云服务器时，指定返回的ID，用于查询本次批量创建的弹性云服务器。
    *
    * @return $this
    */
    public function setReservationId($reservationId)
    {
        $this->container['reservationId'] = $reservationId;
        return $this;
    }

    /**
    * Gets status
    *  云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  只有管理员可以使用“deleted”状态过滤查询已经删除的弹性云服务器。  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 云服务器状态。  取值范围：  ACTIVE， BUILD，DELETED，ERROR，HARD_REBOOT，MIGRATING，REBOOT，RESIZE，REVERT_RESIZE，SHELVED，SHELVED_OFFLOADED，SHUTOFF，UNKNOWN，VERIFY_RESIZE  只有管理员可以使用“deleted”状态过滤查询已经删除的弹性云服务器。  弹性云服务器状态说明请参考[云服务器状态](https://support.huaweicloud.com/api-ecs/ecs_08_0002.html)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  查询tag字段中包含该值的云服务器。
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 查询tag字段中包含该值的云服务器。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets ipEq
    *  IPv4地址过滤结果，匹配规则为精确匹配。
    *
    * @return string|null
    */
    public function getIpEq()
    {
        return $this->container['ipEq'];
    }

    /**
    * Sets ipEq
    *
    * @param string|null $ipEq IPv4地址过滤结果，匹配规则为精确匹配。
    *
    * @return $this
    */
    public function setIpEq($ipEq)
    {
        $this->container['ipEq'] = $ipEq;
        return $this;
    }

    /**
    * Gets serverId
    *  云服务器ID，格式为UUID，匹配规则为精确匹配  示例: server_id={id1}&server_id={id2}  说明： 在使用server_id作为过滤条件时，不能同时使用其他过滤条件。如果同时指定server_id及其他过滤条件，则以server_id条件为准，其他过滤条件会被忽略 当server_id中含有不存在的云服务器ID时，返回的响应参数中该云服务器ID对应的servers结构体中除了id和fault其它字段均为null 为了避免API的URI过长，建议一次查询的server_id个数不超过100个
    *
    * @return string|null
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string|null $serverId 云服务器ID，格式为UUID，匹配规则为精确匹配  示例: server_id={id1}&server_id={id2}  说明： 在使用server_id作为过滤条件时，不能同时使用其他过滤条件。如果同时指定server_id及其他过滤条件，则以server_id条件为准，其他过滤条件会被忽略 当server_id中含有不存在的云服务器ID时，返回的响应参数中该云服务器ID对应的servers结构体中除了id和fault其它字段均为null 为了避免API的URI过长，建议一次查询的server_id个数不超过100个
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
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

