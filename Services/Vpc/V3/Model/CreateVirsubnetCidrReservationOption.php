<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVirsubnetCidrReservationOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVirsubnetCidrReservationOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * virsubnetId  **参数解释**： 子网预留网段所属的子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段的IP版本，支持IPv4和IPv6。 **约束限制**： 不涉及。 **取值范围**： - 4：表示IPv4。 - 6：表示IPv6。 **默认取值**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。 **约束限制**： - CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mask  **参数解释**： 子网预留网段的IP网段掩码长度。 **约束限制**： - 整数，预留网段的掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 - 指定掩码长度创建预留网段，最后mask与子网掩码的差值长度的bit位由系统自动分配，例如子网cidr为192.168.21.0/24，子网掩码长度24，指定预留网段长度为27，差值长度27 - 24 = 3，即第25,26,27这3个bit位由系统自动分配。例如：   - 第25-27的bit位分配为011，最终创建出的子网预留网段cidr是192.168.21.96/27，其中96转为二进制是0110 0000；   - 第25-27的bit位分配为110，最终创建出的子网预留网段cidr是192.168.21.192/27，其中192转为二进制是1100 0000。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 子网预留网段的名称。 **约束限制**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。 **约束限制**： 0-255个字符，不能包含“<”和“>”。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'virsubnetId' => 'string',
            'ipVersion' => 'int',
            'cidr' => 'string',
            'mask' => 'int',
            'name' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * virsubnetId  **参数解释**： 子网预留网段所属的子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段的IP版本，支持IPv4和IPv6。 **约束限制**： 不涉及。 **取值范围**： - 4：表示IPv4。 - 6：表示IPv6。 **默认取值**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。 **约束限制**： - CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mask  **参数解释**： 子网预留网段的IP网段掩码长度。 **约束限制**： - 整数，预留网段的掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 - 指定掩码长度创建预留网段，最后mask与子网掩码的差值长度的bit位由系统自动分配，例如子网cidr为192.168.21.0/24，子网掩码长度24，指定预留网段长度为27，差值长度27 - 24 = 3，即第25,26,27这3个bit位由系统自动分配。例如：   - 第25-27的bit位分配为011，最终创建出的子网预留网段cidr是192.168.21.96/27，其中96转为二进制是0110 0000；   - 第25-27的bit位分配为110，最终创建出的子网预留网段cidr是192.168.21.192/27，其中192转为二进制是1100 0000。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 子网预留网段的名称。 **约束限制**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。 **约束限制**： 0-255个字符，不能包含“<”和“>”。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'virsubnetId' => null,
        'ipVersion' => 'int32',
        'cidr' => null,
        'mask' => 'int32',
        'name' => null,
        'description' => null
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
    * virsubnetId  **参数解释**： 子网预留网段所属的子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段的IP版本，支持IPv4和IPv6。 **约束限制**： 不涉及。 **取值范围**： - 4：表示IPv4。 - 6：表示IPv6。 **默认取值**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。 **约束限制**： - CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mask  **参数解释**： 子网预留网段的IP网段掩码长度。 **约束限制**： - 整数，预留网段的掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 - 指定掩码长度创建预留网段，最后mask与子网掩码的差值长度的bit位由系统自动分配，例如子网cidr为192.168.21.0/24，子网掩码长度24，指定预留网段长度为27，差值长度27 - 24 = 3，即第25,26,27这3个bit位由系统自动分配。例如：   - 第25-27的bit位分配为011，最终创建出的子网预留网段cidr是192.168.21.96/27，其中96转为二进制是0110 0000；   - 第25-27的bit位分配为110，最终创建出的子网预留网段cidr是192.168.21.192/27，其中192转为二进制是1100 0000。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 子网预留网段的名称。 **约束限制**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。 **约束限制**： 0-255个字符，不能包含“<”和“>”。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'virsubnetId' => 'virsubnet_id',
            'ipVersion' => 'ip_version',
            'cidr' => 'cidr',
            'mask' => 'mask',
            'name' => 'name',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * virsubnetId  **参数解释**： 子网预留网段所属的子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段的IP版本，支持IPv4和IPv6。 **约束限制**： 不涉及。 **取值范围**： - 4：表示IPv4。 - 6：表示IPv6。 **默认取值**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。 **约束限制**： - CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mask  **参数解释**： 子网预留网段的IP网段掩码长度。 **约束限制**： - 整数，预留网段的掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 - 指定掩码长度创建预留网段，最后mask与子网掩码的差值长度的bit位由系统自动分配，例如子网cidr为192.168.21.0/24，子网掩码长度24，指定预留网段长度为27，差值长度27 - 24 = 3，即第25,26,27这3个bit位由系统自动分配。例如：   - 第25-27的bit位分配为011，最终创建出的子网预留网段cidr是192.168.21.96/27，其中96转为二进制是0110 0000；   - 第25-27的bit位分配为110，最终创建出的子网预留网段cidr是192.168.21.192/27，其中192转为二进制是1100 0000。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 子网预留网段的名称。 **约束限制**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。 **约束限制**： 0-255个字符，不能包含“<”和“>”。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'virsubnetId' => 'setVirsubnetId',
            'ipVersion' => 'setIpVersion',
            'cidr' => 'setCidr',
            'mask' => 'setMask',
            'name' => 'setName',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * virsubnetId  **参数解释**： 子网预留网段所属的子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * ipVersion  **参数解释**： 子网预留网段的IP版本，支持IPv4和IPv6。 **约束限制**： 不涉及。 **取值范围**： - 4：表示IPv4。 - 6：表示IPv6。 **默认取值**： 不涉及。
    * cidr  **参数解释**： 子网预留网段的IP网段。 **约束限制**： - CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * mask  **参数解释**： 子网预留网段的IP网段掩码长度。 **约束限制**： - 整数，预留网段的掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 - 指定掩码长度创建预留网段，最后mask与子网掩码的差值长度的bit位由系统自动分配，例如子网cidr为192.168.21.0/24，子网掩码长度24，指定预留网段长度为27，差值长度27 - 24 = 3，即第25,26,27这3个bit位由系统自动分配。例如：   - 第25-27的bit位分配为011，最终创建出的子网预留网段cidr是192.168.21.96/27，其中96转为二进制是0110 0000；   - 第25-27的bit位分配为110，最终创建出的子网预留网段cidr是192.168.21.192/27，其中192转为二进制是1100 0000。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * name  **参数解释**： 子网预留网段的名称。 **约束限制**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * description  **参数解释**： 子网预留网段的描述信息。 **约束限制**： 0-255个字符，不能包含“<”和“>”。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'virsubnetId' => 'getVirsubnetId',
            'ipVersion' => 'getIpVersion',
            'cidr' => 'getCidr',
            'mask' => 'getMask',
            'name' => 'getName',
            'description' => 'getDescription'
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
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['mask'] = isset($data['mask']) ? $data['mask'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['virsubnetId'] === null) {
            $invalidProperties[] = "'virsubnetId' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
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
    * Gets virsubnetId
    *  **参数解释**： 子网预留网段所属的子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string $virsubnetId **参数解释**： 子网预留网段所属的子网ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**： 子网预留网段的IP版本，支持IPv4和IPv6。 **约束限制**： 不涉及。 **取值范围**： - 4：表示IPv4。 - 6：表示IPv6。 **默认取值**： 不涉及。
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
    * @param int $ipVersion **参数解释**： 子网预留网段的IP版本，支持IPv4和IPv6。 **约束限制**： 不涉及。 **取值范围**： - 4：表示IPv4。 - 6：表示IPv6。 **默认取值**： 不涉及。
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
    *  **参数解释**： 子网预留网段的IP网段。 **约束限制**： - CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr **参数解释**： 子网预留网段的IP网段。 **约束限制**： - CIDR格式，掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets mask
    *  **参数解释**： 子网预留网段的IP网段掩码长度。 **约束限制**： - 整数，预留网段的掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 - 指定掩码长度创建预留网段，最后mask与子网掩码的差值长度的bit位由系统自动分配，例如子网cidr为192.168.21.0/24，子网掩码长度24，指定预留网段长度为27，差值长度27 - 24 = 3，即第25,26,27这3个bit位由系统自动分配。例如：   - 第25-27的bit位分配为011，最终创建出的子网预留网段cidr是192.168.21.96/27，其中96转为二进制是0110 0000；   - 第25-27的bit位分配为110，最终创建出的子网预留网段cidr是192.168.21.192/27，其中192转为二进制是1100 0000。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getMask()
    {
        return $this->container['mask'];
    }

    /**
    * Sets mask
    *
    * @param int|null $mask **参数解释**： 子网预留网段的IP网段掩码长度。 **约束限制**： - 整数，预留网段的掩码长度最小值为“所属子网的网段掩码 + 2”，最大值为32（IPv4）或128（IPv6）。 - cidr和mask参数必须输入一个，两者同时输入时不能冲突。 - 子网预留网段不能包含所属子网的已使用的地址和系统预留地址（子网的第1个和最后2个地址）。 - 指定掩码长度创建预留网段，最后mask与子网掩码的差值长度的bit位由系统自动分配，例如子网cidr为192.168.21.0/24，子网掩码长度24，指定预留网段长度为27，差值长度27 - 24 = 3，即第25,26,27这3个bit位由系统自动分配。例如：   - 第25-27的bit位分配为011，最终创建出的子网预留网段cidr是192.168.21.96/27，其中96转为二进制是0110 0000；   - 第25-27的bit位分配为110，最终创建出的子网预留网段cidr是192.168.21.192/27，其中192转为二进制是1100 0000。  **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setMask($mask)
    {
        $this->container['mask'] = $mask;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 子网预留网段的名称。 **约束限制**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $name **参数解释**： 子网预留网段的名称。 **约束限制**： 1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 子网预留网段的描述信息。 **约束限制**： 0-255个字符，不能包含“<”和“>”。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $description **参数解释**： 子网预留网段的描述信息。 **约束限制**： 0-255个字符，不能包含“<”和“>”。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

