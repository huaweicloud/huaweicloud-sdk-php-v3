<?php

namespace HuaweiCloud\SDK\Elb\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListL7policiesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListL7policiesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  分页查询中每页的转发策略个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发策略的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  转发策略ID。
    * name  转发策略名称。
    * description  转发策略的描述信息。
    * adminStateUp  转发策略的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * listenerId  转发策略所在的监听器ID。
    * action  转发策略的匹配动作。 取值范围：REDIRECT_TO_POOL：将匹配的流量转发到redirect_pool_id指定的后端云服务器组上；REDIRECT_TO_LISTENER：将listener_id指定的HTTP监听器的流量重定向到redirect_listener_id指定的TERMINATED_HTTPS监听器上。
    * redirectPoolId  流量匹配后转发到后端云服务器组的ID。
    * redirectListenerId  流量匹配后转发到的监听器的ID。
    * redirectUrl  转发策略重定向到的url。该字段为预留字段，暂未启用。
    * position  转发优先级，从1递增，最高100。默认值：100；该字段为预留字段，暂未启用。
    * provisioningStatus  转发策略的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * displayAllRules  是否显示所有的rule信息。取值范围：false表示不显示（跟以前一样只显示ID）；true表示显示。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'adminStateUp' => 'bool',
            'listenerId' => 'string',
            'action' => 'string',
            'redirectPoolId' => 'string',
            'redirectListenerId' => 'string',
            'redirectUrl' => 'string',
            'position' => 'int',
            'provisioningStatus' => 'string',
            'enterpriseProjectId' => 'string',
            'displayAllRules' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  分页查询中每页的转发策略个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发策略的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  转发策略ID。
    * name  转发策略名称。
    * description  转发策略的描述信息。
    * adminStateUp  转发策略的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * listenerId  转发策略所在的监听器ID。
    * action  转发策略的匹配动作。 取值范围：REDIRECT_TO_POOL：将匹配的流量转发到redirect_pool_id指定的后端云服务器组上；REDIRECT_TO_LISTENER：将listener_id指定的HTTP监听器的流量重定向到redirect_listener_id指定的TERMINATED_HTTPS监听器上。
    * redirectPoolId  流量匹配后转发到后端云服务器组的ID。
    * redirectListenerId  流量匹配后转发到的监听器的ID。
    * redirectUrl  转发策略重定向到的url。该字段为预留字段，暂未启用。
    * position  转发优先级，从1递增，最高100。默认值：100；该字段为预留字段，暂未启用。
    * provisioningStatus  转发策略的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * displayAllRules  是否显示所有的rule信息。取值范围：false表示不显示（跟以前一样只显示ID）；true表示显示。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'adminStateUp' => null,
        'listenerId' => null,
        'action' => null,
        'redirectPoolId' => null,
        'redirectListenerId' => null,
        'redirectUrl' => null,
        'position' => 'int32',
        'provisioningStatus' => null,
        'enterpriseProjectId' => null,
        'displayAllRules' => null
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
    * limit  分页查询中每页的转发策略个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发策略的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  转发策略ID。
    * name  转发策略名称。
    * description  转发策略的描述信息。
    * adminStateUp  转发策略的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * listenerId  转发策略所在的监听器ID。
    * action  转发策略的匹配动作。 取值范围：REDIRECT_TO_POOL：将匹配的流量转发到redirect_pool_id指定的后端云服务器组上；REDIRECT_TO_LISTENER：将listener_id指定的HTTP监听器的流量重定向到redirect_listener_id指定的TERMINATED_HTTPS监听器上。
    * redirectPoolId  流量匹配后转发到后端云服务器组的ID。
    * redirectListenerId  流量匹配后转发到的监听器的ID。
    * redirectUrl  转发策略重定向到的url。该字段为预留字段，暂未启用。
    * position  转发优先级，从1递增，最高100。默认值：100；该字段为预留字段，暂未启用。
    * provisioningStatus  转发策略的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * displayAllRules  是否显示所有的rule信息。取值范围：false表示不显示（跟以前一样只显示ID）；true表示显示。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
            'listenerId' => 'listener_id',
            'action' => 'action',
            'redirectPoolId' => 'redirect_pool_id',
            'redirectListenerId' => 'redirect_listener_id',
            'redirectUrl' => 'redirect_url',
            'position' => 'position',
            'provisioningStatus' => 'provisioning_status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'displayAllRules' => 'display_all_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  分页查询中每页的转发策略个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发策略的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  转发策略ID。
    * name  转发策略名称。
    * description  转发策略的描述信息。
    * adminStateUp  转发策略的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * listenerId  转发策略所在的监听器ID。
    * action  转发策略的匹配动作。 取值范围：REDIRECT_TO_POOL：将匹配的流量转发到redirect_pool_id指定的后端云服务器组上；REDIRECT_TO_LISTENER：将listener_id指定的HTTP监听器的流量重定向到redirect_listener_id指定的TERMINATED_HTTPS监听器上。
    * redirectPoolId  流量匹配后转发到后端云服务器组的ID。
    * redirectListenerId  流量匹配后转发到的监听器的ID。
    * redirectUrl  转发策略重定向到的url。该字段为预留字段，暂未启用。
    * position  转发优先级，从1递增，最高100。默认值：100；该字段为预留字段，暂未启用。
    * provisioningStatus  转发策略的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * displayAllRules  是否显示所有的rule信息。取值范围：false表示不显示（跟以前一样只显示ID）；true表示显示。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
            'listenerId' => 'setListenerId',
            'action' => 'setAction',
            'redirectPoolId' => 'setRedirectPoolId',
            'redirectListenerId' => 'setRedirectListenerId',
            'redirectUrl' => 'setRedirectUrl',
            'position' => 'setPosition',
            'provisioningStatus' => 'setProvisioningStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'displayAllRules' => 'setDisplayAllRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  分页查询中每页的转发策略个数
    * marker  分页查询的起始的资源id，表示上一页最后一条查询记录的转发策略的id。不指定时表示查询第一页。
    * pageReverse  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    * id  转发策略ID。
    * name  转发策略名称。
    * description  转发策略的描述信息。
    * adminStateUp  转发策略的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    * listenerId  转发策略所在的监听器ID。
    * action  转发策略的匹配动作。 取值范围：REDIRECT_TO_POOL：将匹配的流量转发到redirect_pool_id指定的后端云服务器组上；REDIRECT_TO_LISTENER：将listener_id指定的HTTP监听器的流量重定向到redirect_listener_id指定的TERMINATED_HTTPS监听器上。
    * redirectPoolId  流量匹配后转发到后端云服务器组的ID。
    * redirectListenerId  流量匹配后转发到的监听器的ID。
    * redirectUrl  转发策略重定向到的url。该字段为预留字段，暂未启用。
    * position  转发优先级，从1递增，最高100。默认值：100；该字段为预留字段，暂未启用。
    * provisioningStatus  转发策略的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    * enterpriseProjectId  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    * displayAllRules  是否显示所有的rule信息。取值范围：false表示不显示（跟以前一样只显示ID）；true表示显示。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
            'listenerId' => 'getListenerId',
            'action' => 'getAction',
            'redirectPoolId' => 'getRedirectPoolId',
            'redirectListenerId' => 'getRedirectListenerId',
            'redirectUrl' => 'getRedirectUrl',
            'position' => 'getPosition',
            'provisioningStatus' => 'getProvisioningStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'displayAllRules' => 'getDisplayAllRules'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['redirectPoolId'] = isset($data['redirectPoolId']) ? $data['redirectPoolId'] : null;
        $this->container['redirectListenerId'] = isset($data['redirectListenerId']) ? $data['redirectListenerId'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['displayAllRules'] = isset($data['displayAllRules']) ? $data['displayAllRules'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets limit
    *  分页查询中每页的转发策略个数
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
    * @param int|null $limit 分页查询中每页的转发策略个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询的起始的资源id，表示上一页最后一条查询记录的转发策略的id。不指定时表示查询第一页。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询的起始的资源id，表示上一页最后一条查询记录的转发策略的id。不指定时表示查询第一页。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 分页的顺序，true表示从后往前分页，false表示从前往后分页，默认为false。
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets id
    *  转发策略ID。
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
    * @param string|null $id 转发策略ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  转发策略名称。
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
    * @param string|null $name 转发策略名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  转发策略的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 转发策略的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  转发策略的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 转发策略的管理状态；取值范围： true/false。该字段为预留字段，暂未启用。默认为true。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets listenerId
    *  转发策略所在的监听器ID。
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
    * @param string|null $listenerId 转发策略所在的监听器ID。
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets action
    *  转发策略的匹配动作。 取值范围：REDIRECT_TO_POOL：将匹配的流量转发到redirect_pool_id指定的后端云服务器组上；REDIRECT_TO_LISTENER：将listener_id指定的HTTP监听器的流量重定向到redirect_listener_id指定的TERMINATED_HTTPS监听器上。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 转发策略的匹配动作。 取值范围：REDIRECT_TO_POOL：将匹配的流量转发到redirect_pool_id指定的后端云服务器组上；REDIRECT_TO_LISTENER：将listener_id指定的HTTP监听器的流量重定向到redirect_listener_id指定的TERMINATED_HTTPS监听器上。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets redirectPoolId
    *  流量匹配后转发到后端云服务器组的ID。
    *
    * @return string|null
    */
    public function getRedirectPoolId()
    {
        return $this->container['redirectPoolId'];
    }

    /**
    * Sets redirectPoolId
    *
    * @param string|null $redirectPoolId 流量匹配后转发到后端云服务器组的ID。
    *
    * @return $this
    */
    public function setRedirectPoolId($redirectPoolId)
    {
        $this->container['redirectPoolId'] = $redirectPoolId;
        return $this;
    }

    /**
    * Gets redirectListenerId
    *  流量匹配后转发到的监听器的ID。
    *
    * @return string|null
    */
    public function getRedirectListenerId()
    {
        return $this->container['redirectListenerId'];
    }

    /**
    * Sets redirectListenerId
    *
    * @param string|null $redirectListenerId 流量匹配后转发到的监听器的ID。
    *
    * @return $this
    */
    public function setRedirectListenerId($redirectListenerId)
    {
        $this->container['redirectListenerId'] = $redirectListenerId;
        return $this;
    }

    /**
    * Gets redirectUrl
    *  转发策略重定向到的url。该字段为预留字段，暂未启用。
    *
    * @return string|null
    */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
    * Sets redirectUrl
    *
    * @param string|null $redirectUrl 转发策略重定向到的url。该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;
        return $this;
    }

    /**
    * Gets position
    *  转发优先级，从1递增，最高100。默认值：100；该字段为预留字段，暂未启用。
    *
    * @return int|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param int|null $position 转发优先级，从1递增，最高100。默认值：100；该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  转发策略的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    *
    * @return string|null
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string|null $provisioningStatus 转发策略的配置状态，可以为ACTIVE、PENDING_CREATE 或者ERROR。默认值：ACTIVE；该字段为预留字段，暂未启用。
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
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
    * @param string|null $enterpriseProjectId 企业项目ID。  传入all_granted_eps表示查询所有有权限的企业项目资源；\"0\"表示查询默认企业项目资源；或者指定的企业项目ID下的资源。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets displayAllRules
    *  是否显示所有的rule信息。取值范围：false表示不显示（跟以前一样只显示ID）；true表示显示。
    *
    * @return bool|null
    */
    public function getDisplayAllRules()
    {
        return $this->container['displayAllRules'];
    }

    /**
    * Sets displayAllRules
    *
    * @param bool|null $displayAllRules 是否显示所有的rule信息。取值范围：false表示不显示（跟以前一样只显示ID）；true表示显示。
    *
    * @return $this
    */
    public function setDisplayAllRules($displayAllRules)
    {
        $this->container['displayAllRules'] = $displayAllRules;
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

