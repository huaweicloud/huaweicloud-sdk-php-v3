<?php

namespace HuaweiCloud\SDK\Esw\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Instance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Instance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  - 参数解释：ESW实例的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：ESW实例名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * region  - 参数解释：ESW实例所属region的ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * flavorRef  - 参数解释：ESW实例规格。 - 约束限制：不涉及。 - 取值范围：参考flavor list接口响应。 - 默认取值：不涉及。
    * haMode  - 参数解释：ESW实例的高可用模式。 - 约束限制：当前只支持设置ha。 - 取值范围：ha。 - 默认取值：不涉及。
    * status  - 参数解释：ESW实例的状态。 - 约束限制：不涉及。 - 取值范围：   - active：运行中   - failed：创建失败   - abnormal：异常   - build：创建中   - frozen：已冻结 - 默认取值：不涉及。
    * createdAt  - 参数解释：ESW实例创建时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * updatedAt  - 参数解释：ESW实例更新时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * description  - 参数解释：ESW实例描述信息。 - 约束限制：   - 长度范围为0~255个字符。   - 不能包含“<”和“>”。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelInfo  tunnelInfo
    * chargeInfos  chargeInfos
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'region' => 'string',
            'flavorRef' => 'string',
            'haMode' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'description' => 'string',
            'tunnelInfo' => '\HuaweiCloud\SDK\Esw\V3\Model\TunnelInfoResult',
            'chargeInfos' => '\HuaweiCloud\SDK\Esw\V3\Model\PostPaidChargeInfos',
            'availabilityZones' => '\HuaweiCloud\SDK\Esw\V3\Model\AvailabilityZones'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  - 参数解释：ESW实例的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：ESW实例名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * region  - 参数解释：ESW实例所属region的ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * flavorRef  - 参数解释：ESW实例规格。 - 约束限制：不涉及。 - 取值范围：参考flavor list接口响应。 - 默认取值：不涉及。
    * haMode  - 参数解释：ESW实例的高可用模式。 - 约束限制：当前只支持设置ha。 - 取值范围：ha。 - 默认取值：不涉及。
    * status  - 参数解释：ESW实例的状态。 - 约束限制：不涉及。 - 取值范围：   - active：运行中   - failed：创建失败   - abnormal：异常   - build：创建中   - frozen：已冻结 - 默认取值：不涉及。
    * createdAt  - 参数解释：ESW实例创建时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * updatedAt  - 参数解释：ESW实例更新时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * description  - 参数解释：ESW实例描述信息。 - 约束限制：   - 长度范围为0~255个字符。   - 不能包含“<”和“>”。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelInfo  tunnelInfo
    * chargeInfos  chargeInfos
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'region' => null,
        'flavorRef' => null,
        'haMode' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'description' => null,
        'tunnelInfo' => null,
        'chargeInfos' => null,
        'availabilityZones' => null
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
    * id  - 参数解释：ESW实例的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：ESW实例名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * region  - 参数解释：ESW实例所属region的ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * flavorRef  - 参数解释：ESW实例规格。 - 约束限制：不涉及。 - 取值范围：参考flavor list接口响应。 - 默认取值：不涉及。
    * haMode  - 参数解释：ESW实例的高可用模式。 - 约束限制：当前只支持设置ha。 - 取值范围：ha。 - 默认取值：不涉及。
    * status  - 参数解释：ESW实例的状态。 - 约束限制：不涉及。 - 取值范围：   - active：运行中   - failed：创建失败   - abnormal：异常   - build：创建中   - frozen：已冻结 - 默认取值：不涉及。
    * createdAt  - 参数解释：ESW实例创建时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * updatedAt  - 参数解释：ESW实例更新时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * description  - 参数解释：ESW实例描述信息。 - 约束限制：   - 长度范围为0~255个字符。   - 不能包含“<”和“>”。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelInfo  tunnelInfo
    * chargeInfos  chargeInfos
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'region' => 'region',
            'flavorRef' => 'flavor_ref',
            'haMode' => 'ha_mode',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'description' => 'description',
            'tunnelInfo' => 'tunnel_info',
            'chargeInfos' => 'charge_infos',
            'availabilityZones' => 'availability_zones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  - 参数解释：ESW实例的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：ESW实例名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * region  - 参数解释：ESW实例所属region的ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * flavorRef  - 参数解释：ESW实例规格。 - 约束限制：不涉及。 - 取值范围：参考flavor list接口响应。 - 默认取值：不涉及。
    * haMode  - 参数解释：ESW实例的高可用模式。 - 约束限制：当前只支持设置ha。 - 取值范围：ha。 - 默认取值：不涉及。
    * status  - 参数解释：ESW实例的状态。 - 约束限制：不涉及。 - 取值范围：   - active：运行中   - failed：创建失败   - abnormal：异常   - build：创建中   - frozen：已冻结 - 默认取值：不涉及。
    * createdAt  - 参数解释：ESW实例创建时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * updatedAt  - 参数解释：ESW实例更新时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * description  - 参数解释：ESW实例描述信息。 - 约束限制：   - 长度范围为0~255个字符。   - 不能包含“<”和“>”。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelInfo  tunnelInfo
    * chargeInfos  chargeInfos
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'region' => 'setRegion',
            'flavorRef' => 'setFlavorRef',
            'haMode' => 'setHaMode',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'description' => 'setDescription',
            'tunnelInfo' => 'setTunnelInfo',
            'chargeInfos' => 'setChargeInfos',
            'availabilityZones' => 'setAvailabilityZones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  - 参数解释：ESW实例的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * name  - 参数解释：ESW实例名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * projectId  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * region  - 参数解释：ESW实例所属region的ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * flavorRef  - 参数解释：ESW实例规格。 - 约束限制：不涉及。 - 取值范围：参考flavor list接口响应。 - 默认取值：不涉及。
    * haMode  - 参数解释：ESW实例的高可用模式。 - 约束限制：当前只支持设置ha。 - 取值范围：ha。 - 默认取值：不涉及。
    * status  - 参数解释：ESW实例的状态。 - 约束限制：不涉及。 - 取值范围：   - active：运行中   - failed：创建失败   - abnormal：异常   - build：创建中   - frozen：已冻结 - 默认取值：不涉及。
    * createdAt  - 参数解释：ESW实例创建时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * updatedAt  - 参数解释：ESW实例更新时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * description  - 参数解释：ESW实例描述信息。 - 约束限制：   - 长度范围为0~255个字符。   - 不能包含“<”和“>”。 - 取值范围：不涉及。 - 默认取值：不涉及。
    * tunnelInfo  tunnelInfo
    * chargeInfos  chargeInfos
    * availabilityZones  availabilityZones
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'region' => 'getRegion',
            'flavorRef' => 'getFlavorRef',
            'haMode' => 'getHaMode',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'description' => 'getDescription',
            'tunnelInfo' => 'getTunnelInfo',
            'chargeInfos' => 'getChargeInfos',
            'availabilityZones' => 'getAvailabilityZones'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['haMode'] = isset($data['haMode']) ? $data['haMode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tunnelInfo'] = isset($data['tunnelInfo']) ? $data['tunnelInfo'] : null;
        $this->container['chargeInfos'] = isset($data['chargeInfos']) ? $data['chargeInfos'] : null;
        $this->container['availabilityZones'] = isset($data['availabilityZones']) ? $data['availabilityZones'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['haMode'] === null) {
            $invalidProperties[] = "'haMode' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['tunnelInfo'] === null) {
            $invalidProperties[] = "'tunnelInfo' can't be null";
        }
        if ($this->container['chargeInfos'] === null) {
            $invalidProperties[] = "'chargeInfos' can't be null";
        }
        if ($this->container['availabilityZones'] === null) {
            $invalidProperties[] = "'availabilityZones' can't be null";
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
    *  - 参数解释：ESW实例的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id - 参数解释：ESW实例的唯一标识。 - 约束限制：带“-”的UUID格式。 - 取值范围：不涉及。 - 默认取值：不涉及。
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
    *  - 参数解释：ESW实例名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name - 参数解释：ESW实例名称。 - 约束限制：   - 长度范围为1~64个字符。   - 名称由中文、英文字母、数字、下划线（_）、中划线（-）、点（.）组成。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId - 参数解释：ESW实例所属项目ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets region
    *  - 参数解释：ESW实例所属region的ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region - 参数解释：ESW实例所属region的ID。 - 约束限制：不涉及。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets flavorRef
    *  - 参数解释：ESW实例规格。 - 约束限制：不涉及。 - 取值范围：参考flavor list接口响应。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef - 参数解释：ESW实例规格。 - 约束限制：不涉及。 - 取值范围：参考flavor list接口响应。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets haMode
    *  - 参数解释：ESW实例的高可用模式。 - 约束限制：当前只支持设置ha。 - 取值范围：ha。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getHaMode()
    {
        return $this->container['haMode'];
    }

    /**
    * Sets haMode
    *
    * @param string $haMode - 参数解释：ESW实例的高可用模式。 - 约束限制：当前只支持设置ha。 - 取值范围：ha。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setHaMode($haMode)
    {
        $this->container['haMode'] = $haMode;
        return $this;
    }

    /**
    * Gets status
    *  - 参数解释：ESW实例的状态。 - 约束限制：不涉及。 - 取值范围：   - active：运行中   - failed：创建失败   - abnormal：异常   - build：创建中   - frozen：已冻结 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status - 参数解释：ESW实例的状态。 - 约束限制：不涉及。 - 取值范围：   - active：运行中   - failed：创建失败   - abnormal：异常   - build：创建中   - frozen：已冻结 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  - 参数解释：ESW实例创建时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt - 参数解释：ESW实例创建时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  - 参数解释：ESW实例更新时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt - 参数解释：ESW实例更新时间。 - 约束限制：UTC时间，格式为yyyy-MM-ddTHH:mm:ss。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets description
    *  - 参数解释：ESW实例描述信息。 - 约束限制：   - 长度范围为0~255个字符。   - 不能包含“<”和“>”。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description - 参数解释：ESW实例描述信息。 - 约束限制：   - 长度范围为0~255个字符。   - 不能包含“<”和“>”。 - 取值范围：不涉及。 - 默认取值：不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tunnelInfo
    *  tunnelInfo
    *
    * @return \HuaweiCloud\SDK\Esw\V3\Model\TunnelInfoResult
    */
    public function getTunnelInfo()
    {
        return $this->container['tunnelInfo'];
    }

    /**
    * Sets tunnelInfo
    *
    * @param \HuaweiCloud\SDK\Esw\V3\Model\TunnelInfoResult $tunnelInfo tunnelInfo
    *
    * @return $this
    */
    public function setTunnelInfo($tunnelInfo)
    {
        $this->container['tunnelInfo'] = $tunnelInfo;
        return $this;
    }

    /**
    * Gets chargeInfos
    *  chargeInfos
    *
    * @return \HuaweiCloud\SDK\Esw\V3\Model\PostPaidChargeInfos
    */
    public function getChargeInfos()
    {
        return $this->container['chargeInfos'];
    }

    /**
    * Sets chargeInfos
    *
    * @param \HuaweiCloud\SDK\Esw\V3\Model\PostPaidChargeInfos $chargeInfos chargeInfos
    *
    * @return $this
    */
    public function setChargeInfos($chargeInfos)
    {
        $this->container['chargeInfos'] = $chargeInfos;
        return $this;
    }

    /**
    * Gets availabilityZones
    *  availabilityZones
    *
    * @return \HuaweiCloud\SDK\Esw\V3\Model\AvailabilityZones
    */
    public function getAvailabilityZones()
    {
        return $this->container['availabilityZones'];
    }

    /**
    * Sets availabilityZones
    *
    * @param \HuaweiCloud\SDK\Esw\V3\Model\AvailabilityZones $availabilityZones availabilityZones
    *
    * @return $this
    */
    public function setAvailabilityZones($availabilityZones)
    {
        $this->container['availabilityZones'] = $availabilityZones;
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

