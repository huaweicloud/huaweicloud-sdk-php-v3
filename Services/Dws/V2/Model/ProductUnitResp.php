<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductUnitResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductUnitResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * defaultCapacity  **参数解释**： 规格默认容量。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * scenario  **参数解释**： 规格适用场景。 **取值范围**： 不涉及。
    * version  **参数解释**： 规格版本信息。 **取值范围**： v1.0：一代规格。 v2.0：二代规格。
    * status  **参数解释**： 规格状态。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * duplicate  **参数解释**： 规格使用副本数量。 **取值范围**： 不涉及。
    * defaultNode  **参数解释**： 默认节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点数。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点数。 **取值范围**： 不涉及。
    * productVersionList  **参数解释**： 版本信息。 **取值范围**： 不涉及。
    * flavorId  **参数解释**： 底层规格ID。有别于id字段，一般不会用到。 **取值范围**： 不涉及。
    * flavorCode  **参数解释**： 规格的底层规格编码。 **取值范围**： 不涉及。
    * volumeNum  **参数解释**： 规格的磁盘数。 **取值范围**： 不涉及。
    * volumeUsed  volumeUsed
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'code' => 'string',
            'defaultCapacity' => 'string',
            'classify' => 'string',
            'scenario' => 'string',
            'version' => 'string',
            'status' => 'string',
            'attribute' => '\HuaweiCloud\SDK\Dws\V2\Model\ProductExtendResp[]',
            'duplicate' => 'int',
            'defaultNode' => 'int',
            'minNode' => 'int',
            'maxNode' => 'int',
            'productVersionList' => '\HuaweiCloud\SDK\Dws\V2\Model\ProductVersionResp[]',
            'flavorId' => 'string',
            'flavorCode' => 'string',
            'volumeNum' => 'int',
            'volumeUsed' => '\HuaweiCloud\SDK\Dws\V2\Model\ProductVolumeUsedResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * defaultCapacity  **参数解释**： 规格默认容量。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * scenario  **参数解释**： 规格适用场景。 **取值范围**： 不涉及。
    * version  **参数解释**： 规格版本信息。 **取值范围**： v1.0：一代规格。 v2.0：二代规格。
    * status  **参数解释**： 规格状态。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * duplicate  **参数解释**： 规格使用副本数量。 **取值范围**： 不涉及。
    * defaultNode  **参数解释**： 默认节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点数。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点数。 **取值范围**： 不涉及。
    * productVersionList  **参数解释**： 版本信息。 **取值范围**： 不涉及。
    * flavorId  **参数解释**： 底层规格ID。有别于id字段，一般不会用到。 **取值范围**： 不涉及。
    * flavorCode  **参数解释**： 规格的底层规格编码。 **取值范围**： 不涉及。
    * volumeNum  **参数解释**： 规格的磁盘数。 **取值范围**： 不涉及。
    * volumeUsed  volumeUsed
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'code' => null,
        'defaultCapacity' => null,
        'classify' => null,
        'scenario' => null,
        'version' => null,
        'status' => null,
        'attribute' => null,
        'duplicate' => 'int32',
        'defaultNode' => 'int32',
        'minNode' => 'int32',
        'maxNode' => 'int32',
        'productVersionList' => null,
        'flavorId' => null,
        'flavorCode' => null,
        'volumeNum' => 'int32',
        'volumeUsed' => null
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
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * defaultCapacity  **参数解释**： 规格默认容量。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * scenario  **参数解释**： 规格适用场景。 **取值范围**： 不涉及。
    * version  **参数解释**： 规格版本信息。 **取值范围**： v1.0：一代规格。 v2.0：二代规格。
    * status  **参数解释**： 规格状态。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * duplicate  **参数解释**： 规格使用副本数量。 **取值范围**： 不涉及。
    * defaultNode  **参数解释**： 默认节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点数。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点数。 **取值范围**： 不涉及。
    * productVersionList  **参数解释**： 版本信息。 **取值范围**： 不涉及。
    * flavorId  **参数解释**： 底层规格ID。有别于id字段，一般不会用到。 **取值范围**： 不涉及。
    * flavorCode  **参数解释**： 规格的底层规格编码。 **取值范围**： 不涉及。
    * volumeNum  **参数解释**： 规格的磁盘数。 **取值范围**： 不涉及。
    * volumeUsed  volumeUsed
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'code' => 'code',
            'defaultCapacity' => 'default_capacity',
            'classify' => 'classify',
            'scenario' => 'scenario',
            'version' => 'version',
            'status' => 'status',
            'attribute' => 'attribute',
            'duplicate' => 'duplicate',
            'defaultNode' => 'default_node',
            'minNode' => 'min_node',
            'maxNode' => 'max_node',
            'productVersionList' => 'product_version_list',
            'flavorId' => 'flavor_id',
            'flavorCode' => 'flavor_code',
            'volumeNum' => 'volume_num',
            'volumeUsed' => 'volume_used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * defaultCapacity  **参数解释**： 规格默认容量。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * scenario  **参数解释**： 规格适用场景。 **取值范围**： 不涉及。
    * version  **参数解释**： 规格版本信息。 **取值范围**： v1.0：一代规格。 v2.0：二代规格。
    * status  **参数解释**： 规格状态。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * duplicate  **参数解释**： 规格使用副本数量。 **取值范围**： 不涉及。
    * defaultNode  **参数解释**： 默认节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点数。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点数。 **取值范围**： 不涉及。
    * productVersionList  **参数解释**： 版本信息。 **取值范围**： 不涉及。
    * flavorId  **参数解释**： 底层规格ID。有别于id字段，一般不会用到。 **取值范围**： 不涉及。
    * flavorCode  **参数解释**： 规格的底层规格编码。 **取值范围**： 不涉及。
    * volumeNum  **参数解释**： 规格的磁盘数。 **取值范围**： 不涉及。
    * volumeUsed  volumeUsed
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'code' => 'setCode',
            'defaultCapacity' => 'setDefaultCapacity',
            'classify' => 'setClassify',
            'scenario' => 'setScenario',
            'version' => 'setVersion',
            'status' => 'setStatus',
            'attribute' => 'setAttribute',
            'duplicate' => 'setDuplicate',
            'defaultNode' => 'setDefaultNode',
            'minNode' => 'setMinNode',
            'maxNode' => 'setMaxNode',
            'productVersionList' => 'setProductVersionList',
            'flavorId' => 'setFlavorId',
            'flavorCode' => 'setFlavorCode',
            'volumeNum' => 'setVolumeNum',
            'volumeUsed' => 'setVolumeUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * code  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    * defaultCapacity  **参数解释**： 规格默认容量。 **取值范围**： 不涉及。
    * classify  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    * scenario  **参数解释**： 规格适用场景。 **取值范围**： 不涉及。
    * version  **参数解释**： 规格版本信息。 **取值范围**： v1.0：一代规格。 v2.0：二代规格。
    * status  **参数解释**： 规格状态。 **取值范围**： 不涉及。
    * attribute  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    * duplicate  **参数解释**： 规格使用副本数量。 **取值范围**： 不涉及。
    * defaultNode  **参数解释**： 默认节点数量。 **取值范围**： 不涉及。
    * minNode  **参数解释**： 最小节点数。 **取值范围**： 不涉及。
    * maxNode  **参数解释**： 最大节点数。 **取值范围**： 不涉及。
    * productVersionList  **参数解释**： 版本信息。 **取值范围**： 不涉及。
    * flavorId  **参数解释**： 底层规格ID。有别于id字段，一般不会用到。 **取值范围**： 不涉及。
    * flavorCode  **参数解释**： 规格的底层规格编码。 **取值范围**： 不涉及。
    * volumeNum  **参数解释**： 规格的磁盘数。 **取值范围**： 不涉及。
    * volumeUsed  volumeUsed
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'code' => 'getCode',
            'defaultCapacity' => 'getDefaultCapacity',
            'classify' => 'getClassify',
            'scenario' => 'getScenario',
            'version' => 'getVersion',
            'status' => 'getStatus',
            'attribute' => 'getAttribute',
            'duplicate' => 'getDuplicate',
            'defaultNode' => 'getDefaultNode',
            'minNode' => 'getMinNode',
            'maxNode' => 'getMaxNode',
            'productVersionList' => 'getProductVersionList',
            'flavorId' => 'getFlavorId',
            'flavorCode' => 'getFlavorCode',
            'volumeNum' => 'getVolumeNum',
            'volumeUsed' => 'getVolumeUsed'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['defaultCapacity'] = isset($data['defaultCapacity']) ? $data['defaultCapacity'] : null;
        $this->container['classify'] = isset($data['classify']) ? $data['classify'] : null;
        $this->container['scenario'] = isset($data['scenario']) ? $data['scenario'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['attribute'] = isset($data['attribute']) ? $data['attribute'] : null;
        $this->container['duplicate'] = isset($data['duplicate']) ? $data['duplicate'] : null;
        $this->container['defaultNode'] = isset($data['defaultNode']) ? $data['defaultNode'] : null;
        $this->container['minNode'] = isset($data['minNode']) ? $data['minNode'] : null;
        $this->container['maxNode'] = isset($data['maxNode']) ? $data['maxNode'] : null;
        $this->container['productVersionList'] = isset($data['productVersionList']) ? $data['productVersionList'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['flavorCode'] = isset($data['flavorCode']) ? $data['flavorCode'] : null;
        $this->container['volumeNum'] = isset($data['volumeNum']) ? $data['volumeNum'] : null;
        $this->container['volumeUsed'] = isset($data['volumeUsed']) ? $data['volumeUsed'] : null;
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
    * Gets id
    *  **参数解释**： 规格ID。 **取值范围**： 不涉及。
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
    * @param string|null $id **参数解释**： 规格ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets code
    *  **参数解释**： 规格编码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code **参数解释**： 规格编码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets defaultCapacity
    *  **参数解释**： 规格默认容量。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDefaultCapacity()
    {
        return $this->container['defaultCapacity'];
    }

    /**
    * Sets defaultCapacity
    *
    * @param string|null $defaultCapacity **参数解释**： 规格默认容量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDefaultCapacity($defaultCapacity)
    {
        $this->container['defaultCapacity'] = $defaultCapacity;
        return $this;
    }

    /**
    * Gets classify
    *  **参数解释**： 规格类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getClassify()
    {
        return $this->container['classify'];
    }

    /**
    * Sets classify
    *
    * @param string|null $classify **参数解释**： 规格类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setClassify($classify)
    {
        $this->container['classify'] = $classify;
        return $this;
    }

    /**
    * Gets scenario
    *  **参数解释**： 规格适用场景。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getScenario()
    {
        return $this->container['scenario'];
    }

    /**
    * Sets scenario
    *
    * @param string|null $scenario **参数解释**： 规格适用场景。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setScenario($scenario)
    {
        $this->container['scenario'] = $scenario;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 规格版本信息。 **取值范围**： v1.0：一代规格。 v2.0：二代规格。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**： 规格版本信息。 **取值范围**： v1.0：一代规格。 v2.0：二代规格。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 规格状态。 **取值范围**： 不涉及。
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
    * @param string|null $status **参数解释**： 规格状态。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets attribute
    *  **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ProductExtendResp[]|null
    */
    public function getAttribute()
    {
        return $this->container['attribute'];
    }

    /**
    * Sets attribute
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ProductExtendResp[]|null $attribute **参数解释**： 扩展信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAttribute($attribute)
    {
        $this->container['attribute'] = $attribute;
        return $this;
    }

    /**
    * Gets duplicate
    *  **参数解释**： 规格使用副本数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getDuplicate()
    {
        return $this->container['duplicate'];
    }

    /**
    * Sets duplicate
    *
    * @param int|null $duplicate **参数解释**： 规格使用副本数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDuplicate($duplicate)
    {
        $this->container['duplicate'] = $duplicate;
        return $this;
    }

    /**
    * Gets defaultNode
    *  **参数解释**： 默认节点数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getDefaultNode()
    {
        return $this->container['defaultNode'];
    }

    /**
    * Sets defaultNode
    *
    * @param int|null $defaultNode **参数解释**： 默认节点数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDefaultNode($defaultNode)
    {
        $this->container['defaultNode'] = $defaultNode;
        return $this;
    }

    /**
    * Gets minNode
    *  **参数解释**： 最小节点数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMinNode()
    {
        return $this->container['minNode'];
    }

    /**
    * Sets minNode
    *
    * @param int|null $minNode **参数解释**： 最小节点数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinNode($minNode)
    {
        $this->container['minNode'] = $minNode;
        return $this;
    }

    /**
    * Gets maxNode
    *  **参数解释**： 最大节点数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxNode()
    {
        return $this->container['maxNode'];
    }

    /**
    * Sets maxNode
    *
    * @param int|null $maxNode **参数解释**： 最大节点数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxNode($maxNode)
    {
        $this->container['maxNode'] = $maxNode;
        return $this;
    }

    /**
    * Gets productVersionList
    *  **参数解释**： 版本信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ProductVersionResp[]|null
    */
    public function getProductVersionList()
    {
        return $this->container['productVersionList'];
    }

    /**
    * Sets productVersionList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ProductVersionResp[]|null $productVersionList **参数解释**： 版本信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setProductVersionList($productVersionList)
    {
        $this->container['productVersionList'] = $productVersionList;
        return $this;
    }

    /**
    * Gets flavorId
    *  **参数解释**： 底层规格ID。有别于id字段，一般不会用到。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId **参数解释**： 底层规格ID。有别于id字段，一般不会用到。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets flavorCode
    *  **参数解释**： 规格的底层规格编码。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getFlavorCode()
    {
        return $this->container['flavorCode'];
    }

    /**
    * Sets flavorCode
    *
    * @param string|null $flavorCode **参数解释**： 规格的底层规格编码。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setFlavorCode($flavorCode)
    {
        $this->container['flavorCode'] = $flavorCode;
        return $this;
    }

    /**
    * Gets volumeNum
    *  **参数解释**： 规格的磁盘数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getVolumeNum()
    {
        return $this->container['volumeNum'];
    }

    /**
    * Sets volumeNum
    *
    * @param int|null $volumeNum **参数解释**： 规格的磁盘数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVolumeNum($volumeNum)
    {
        $this->container['volumeNum'] = $volumeNum;
        return $this;
    }

    /**
    * Gets volumeUsed
    *  volumeUsed
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\ProductVolumeUsedResp|null
    */
    public function getVolumeUsed()
    {
        return $this->container['volumeUsed'];
    }

    /**
    * Sets volumeUsed
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\ProductVolumeUsedResp|null $volumeUsed volumeUsed
    *
    * @return $this
    */
    public function setVolumeUsed($volumeUsed)
    {
        $this->container['volumeUsed'] = $volumeUsed;
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

