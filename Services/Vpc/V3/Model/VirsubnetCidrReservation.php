<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VirsubnetCidrReservation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VirsubnetCidrReservation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 子网预留网段的资源ID。子网预留网段创建成功后，会生成一个子网预留网段 ID，是子网预留网段对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 子网预留网段所在子网的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vpcId  **参数解释**： 子网预留网段所在VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： 子网预留网段的IP版本。 **取值范围**： - 4：IPv4 - 6：IPv6
    * cidr  **参数解释**： 子网预留网段的IP网段。 **取值范围**： CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。
    * name  **参数解释**： 子网预留网段的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网预留网段的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * projectId  **参数解释**： 子网预留网段所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网预留网段的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    * updatedAt  **参数解释**： 子网预留网段最近一次更新的时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'virsubnetId' => 'string',
            'vpcId' => 'string',
            'ipVersion' => 'int',
            'cidr' => 'string',
            'name' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 子网预留网段的资源ID。子网预留网段创建成功后，会生成一个子网预留网段 ID，是子网预留网段对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 子网预留网段所在子网的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vpcId  **参数解释**： 子网预留网段所在VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： 子网预留网段的IP版本。 **取值范围**： - 4：IPv4 - 6：IPv6
    * cidr  **参数解释**： 子网预留网段的IP网段。 **取值范围**： CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。
    * name  **参数解释**： 子网预留网段的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网预留网段的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * projectId  **参数解释**： 子网预留网段所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网预留网段的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    * updatedAt  **参数解释**： 子网预留网段最近一次更新的时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'virsubnetId' => null,
        'vpcId' => null,
        'ipVersion' => 'int32',
        'cidr' => null,
        'name' => null,
        'description' => null,
        'projectId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  **参数解释**： 子网预留网段的资源ID。子网预留网段创建成功后，会生成一个子网预留网段 ID，是子网预留网段对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 子网预留网段所在子网的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vpcId  **参数解释**： 子网预留网段所在VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： 子网预留网段的IP版本。 **取值范围**： - 4：IPv4 - 6：IPv6
    * cidr  **参数解释**： 子网预留网段的IP网段。 **取值范围**： CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。
    * name  **参数解释**： 子网预留网段的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网预留网段的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * projectId  **参数解释**： 子网预留网段所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网预留网段的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    * updatedAt  **参数解释**： 子网预留网段最近一次更新的时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'virsubnetId' => 'virsubnet_id',
            'vpcId' => 'vpc_id',
            'ipVersion' => 'ip_version',
            'cidr' => 'cidr',
            'name' => 'name',
            'description' => 'description',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 子网预留网段的资源ID。子网预留网段创建成功后，会生成一个子网预留网段 ID，是子网预留网段对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 子网预留网段所在子网的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vpcId  **参数解释**： 子网预留网段所在VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： 子网预留网段的IP版本。 **取值范围**： - 4：IPv4 - 6：IPv6
    * cidr  **参数解释**： 子网预留网段的IP网段。 **取值范围**： CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。
    * name  **参数解释**： 子网预留网段的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网预留网段的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * projectId  **参数解释**： 子网预留网段所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网预留网段的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    * updatedAt  **参数解释**： 子网预留网段最近一次更新的时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'virsubnetId' => 'setVirsubnetId',
            'vpcId' => 'setVpcId',
            'ipVersion' => 'setIpVersion',
            'cidr' => 'setCidr',
            'name' => 'setName',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 子网预留网段的资源ID。子网预留网段创建成功后，会生成一个子网预留网段 ID，是子网预留网段对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
    * virsubnetId  **参数解释**： 子网预留网段所在子网的ID。 **取值范围**： 带“-”的标准UUID格式。
    * vpcId  **参数解释**： 子网预留网段所在VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    * ipVersion  **参数解释**： 子网预留网段的IP版本。 **取值范围**： - 4：IPv4 - 6：IPv6
    * cidr  **参数解释**： 子网预留网段的IP网段。 **取值范围**： CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。
    * name  **参数解释**： 子网预留网段的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
    * description  **参数解释**： 子网预留网段的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    * projectId  **参数解释**： 子网预留网段所属的项目ID。 **取值范围**： 不涉及。
    * createdAt  **参数解释**： 子网预留网段的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    * updatedAt  **参数解释**： 子网预留网段最近一次更新的时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'virsubnetId' => 'getVirsubnetId',
            'vpcId' => 'getVpcId',
            'ipVersion' => 'getIpVersion',
            'cidr' => 'getCidr',
            'name' => 'getName',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
        if ($this->container['cidr'] === null) {
            $invalidProperties[] = "'cidr' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    *  **参数解释**： 子网预留网段的资源ID。子网预留网段创建成功后，会生成一个子网预留网段 ID，是子网预留网段对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
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
    * @param string $id **参数解释**： 子网预留网段的资源ID。子网预留网段创建成功后，会生成一个子网预留网段 ID，是子网预留网段对应的唯一标识。 **取值范围**： 带“-”的标准UUID格式。
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
    *  **参数解释**： 子网预留网段所在子网的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string $virsubnetId **参数解释**： 子网预留网段所在子网的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**： 子网预留网段所在VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId **参数解释**： 子网预留网段所在VPC的ID。 **取值范围**： 带“-”的标准UUID格式。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**： 子网预留网段的IP版本。 **取值范围**： - 4：IPv4 - 6：IPv6
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion **参数解释**： 子网预留网段的IP版本。 **取值范围**： - 4：IPv4 - 6：IPv6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets cidr
    *  **参数解释**： 子网预留网段的IP网段。 **取值范围**： CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。
    *
    * @return string
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string $cidr **参数解释**： 子网预留网段的IP网段。 **取值范围**： CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 子网预留网段的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
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
    * @param string $name **参数解释**： 子网预留网段的名称。 **取值范围**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。
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
    *  **参数解释**： 子网预留网段的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
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
    * @param string $description **参数解释**： 子网预留网段的描述信息。 **取值范围**： 0-255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 子网预留网段所属的项目ID。 **取值范围**： 不涉及。
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
    * @param string $projectId **参数解释**： 子网预留网段所属的项目ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**： 子网预留网段的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
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
    * @param \DateTime $createdAt **参数解释**： 子网预留网段的创建时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
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
    *  **参数解释**： 子网预留网段最近一次更新的时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
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
    * @param \DateTime $updatedAt **参数解释**： 子网预留网段最近一次更新的时间。 **取值范围**： UTC时间格式，yyyy-MM-ddTHH:mm:ssZ。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

