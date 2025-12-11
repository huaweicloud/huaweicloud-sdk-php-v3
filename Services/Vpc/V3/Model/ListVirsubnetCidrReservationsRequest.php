<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListVirsubnetCidrReservationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListVirsubnetCidrReservationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网预留网段的资源ID。
    * id  **参数解释**： 子网预留网段的资源ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * virsubnetId  **参数解释**： 子网预留网段所在的子网ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。可以使用该字段过滤子网预留网段，支持传入多个IP网段过滤。 **取值范围**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段所在子网的IP版本。可以使用该字段过滤子网预留网段，支持传入多个IP版本过滤。 **取值范围**： - 4：过滤出IPv4子网预留网段。 - 6：过滤出IPv6子网预留网段。
    * name  **参数解释**： 子网预留网段的名称。可以使用该字段过滤满足条件的子网预留网段，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。可以使用该字段过滤子网预留网段，支持传入多个描述信息进行过滤。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 子网预留网段所属的企业项目ID。可以使用该字段过滤某个企业项目下的子网预留网段。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有有权限查看企业项目绑定的子网预留网段，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string[]',
            'virsubnetId' => 'string[]',
            'cidr' => 'string[]',
            'ipVersion' => 'int[]',
            'name' => 'string[]',
            'description' => 'string[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网预留网段的资源ID。
    * id  **参数解释**： 子网预留网段的资源ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * virsubnetId  **参数解释**： 子网预留网段所在的子网ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。可以使用该字段过滤子网预留网段，支持传入多个IP网段过滤。 **取值范围**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段所在子网的IP版本。可以使用该字段过滤子网预留网段，支持传入多个IP版本过滤。 **取值范围**： - 4：过滤出IPv4子网预留网段。 - 6：过滤出IPv6子网预留网段。
    * name  **参数解释**： 子网预留网段的名称。可以使用该字段过滤满足条件的子网预留网段，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。可以使用该字段过滤子网预留网段，支持传入多个描述信息进行过滤。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 子网预留网段所属的企业项目ID。可以使用该字段过滤某个企业项目下的子网预留网段。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有有权限查看企业项目绑定的子网预留网段，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'virsubnetId' => null,
        'cidr' => null,
        'ipVersion' => 'int32',
        'name' => null,
        'description' => null,
        'enterpriseProjectId' => null
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
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网预留网段的资源ID。
    * id  **参数解释**： 子网预留网段的资源ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * virsubnetId  **参数解释**： 子网预留网段所在的子网ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。可以使用该字段过滤子网预留网段，支持传入多个IP网段过滤。 **取值范围**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段所在子网的IP版本。可以使用该字段过滤子网预留网段，支持传入多个IP版本过滤。 **取值范围**： - 4：过滤出IPv4子网预留网段。 - 6：过滤出IPv6子网预留网段。
    * name  **参数解释**： 子网预留网段的名称。可以使用该字段过滤满足条件的子网预留网段，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。可以使用该字段过滤子网预留网段，支持传入多个描述信息进行过滤。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 子网预留网段所属的企业项目ID。可以使用该字段过滤某个企业项目下的子网预留网段。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有有权限查看企业项目绑定的子网预留网段，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'virsubnetId' => 'virsubnet_id',
            'cidr' => 'cidr',
            'ipVersion' => 'ip_version',
            'name' => 'name',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网预留网段的资源ID。
    * id  **参数解释**： 子网预留网段的资源ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * virsubnetId  **参数解释**： 子网预留网段所在的子网ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。可以使用该字段过滤子网预留网段，支持传入多个IP网段过滤。 **取值范围**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段所在子网的IP版本。可以使用该字段过滤子网预留网段，支持传入多个IP版本过滤。 **取值范围**： - 4：过滤出IPv4子网预留网段。 - 6：过滤出IPv6子网预留网段。
    * name  **参数解释**： 子网预留网段的名称。可以使用该字段过滤满足条件的子网预留网段，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。可以使用该字段过滤子网预留网段，支持传入多个描述信息进行过滤。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 子网预留网段所属的企业项目ID。可以使用该字段过滤某个企业项目下的子网预留网段。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有有权限查看企业项目绑定的子网预留网段，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'virsubnetId' => 'setVirsubnetId',
            'cidr' => 'setCidr',
            'ipVersion' => 'setIpVersion',
            'name' => 'setName',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释**： 项目ID。 **取值范围**： 不涉及。
    * limit  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000
    * marker  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网预留网段的资源ID。
    * id  **参数解释**： 子网预留网段的资源ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * virsubnetId  **参数解释**： 子网预留网段所在的子网ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。可以使用该字段过滤子网预留网段，支持传入多个IP网段过滤。 **取值范围**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段所在子网的IP版本。可以使用该字段过滤子网预留网段，支持传入多个IP版本过滤。 **取值范围**： - 4：过滤出IPv4子网预留网段。 - 6：过滤出IPv6子网预留网段。
    * name  **参数解释**： 子网预留网段的名称。可以使用该字段过滤满足条件的子网预留网段，支持传入多个名称过滤。 **取值范围**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。可以使用该字段过滤子网预留网段，支持传入多个描述信息进行过滤。 **取值范围**： 不涉及。
    * enterpriseProjectId  **参数解释**： 子网预留网段所属的企业项目ID。可以使用该字段过滤某个企业项目下的子网预留网段。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有有权限查看企业项目绑定的子网预留网段，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'virsubnetId' => 'getVirsubnetId',
            'cidr' => 'getCidr',
            'ipVersion' => 'getIpVersion',
            'name' => 'getName',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
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
    * Gets projectId
    *  **参数解释**： 项目ID。 **取值范围**： 不涉及。
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
    * @param string $projectId **参数解释**： 项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000
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
    * @param int|null $limit **参数解释**： 每页返回的资源个数。 **取值范围**： 0~2000
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
    *  **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网预留网段的资源ID。
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
    * @param string|null $marker **参数解释**： 分页查询起始的资源ID，为空时查询第一页。 **取值范围**： 子网预留网段的资源ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 子网预留网段的资源ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id **参数解释**： 子网预留网段的资源ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  **参数解释**： 子网预留网段所在的子网ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string[]|null $virsubnetId **参数解释**： 子网预留网段所在的子网ID。可以使用该字段过滤子网预留网段，支持传入多个ID过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets cidr
    *  **参数解释**： 子网预留网段的IP网段。可以使用该字段过滤子网预留网段，支持传入多个IP网段过滤。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string[]|null $cidr **参数解释**： 子网预留网段的IP网段。可以使用该字段过滤子网预留网段，支持传入多个IP网段过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**： 子网预留网段所在子网的IP版本。可以使用该字段过滤子网预留网段，支持传入多个IP版本过滤。 **取值范围**： - 4：过滤出IPv4子网预留网段。 - 6：过滤出IPv6子网预留网段。
    *
    * @return int[]|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int[]|null $ipVersion **参数解释**： 子网预留网段所在子网的IP版本。可以使用该字段过滤子网预留网段，支持传入多个IP版本过滤。 **取值范围**： - 4：过滤出IPv4子网预留网段。 - 6：过滤出IPv6子网预留网段。
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 子网预留网段的名称。可以使用该字段过滤满足条件的子网预留网段，支持传入多个名称过滤。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name **参数解释**： 子网预留网段的名称。可以使用该字段过滤满足条件的子网预留网段，支持传入多个名称过滤。 **取值范围**： 不涉及。
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
    *  **参数解释**： 子网预留网段的描述信息。可以使用该字段过滤子网预留网段，支持传入多个描述信息进行过滤。 **取值范围**： 不涉及。
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description **参数解释**： 子网预留网段的描述信息。可以使用该字段过滤子网预留网段，支持传入多个描述信息进行过滤。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 子网预留网段所属的企业项目ID。可以使用该字段过滤某个企业项目下的子网预留网段。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有有权限查看企业项目绑定的子网预留网段，请传参all_granted_eps。
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
    * @param string|null $enterpriseProjectId **参数解释**： 子网预留网段所属的企业项目ID。可以使用该字段过滤某个企业项目下的子网预留网段。 **取值范围**： - 最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。 - 若需要查询当前用户所有有权限查看企业项目绑定的子网预留网段，请传参all_granted_eps。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

