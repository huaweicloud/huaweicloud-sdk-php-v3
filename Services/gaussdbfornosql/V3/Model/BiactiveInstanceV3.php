<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BiactiveInstanceV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BiactiveInstanceV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例当前支持的操作。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 不涉及。
    * regionCode  **参数解释：** 区域。 **取值范围：** 不涉及。
    * nodeNum  **参数解释：** 节点数量。 **取值范围：** 不涉及。
    * vcpus  **参数解释：** vCPU数量。 **取值范围：** 不涉及。
    * ram  **参数解释：** 内存大小，单位GB。 **取值范围：** 不涉及。
    * diskSize  **参数解释：** 磁盘大小，单位GB。 **取值范围：** 不涉及。
    * usedDiskSize  **参数解释：** 已使用磁盘大小，单位GB。 **取值范围：** 不涉及。
    * cidr  **参数解释：** VPC CIDR。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'string',
            'actions' => 'string[]',
            'projectId' => 'string',
            'projectName' => 'string',
            'regionCode' => 'string',
            'nodeNum' => 'int',
            'vcpus' => 'string',
            'ram' => 'string',
            'diskSize' => 'string',
            'usedDiskSize' => 'string',
            'cidr' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例当前支持的操作。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 不涉及。
    * regionCode  **参数解释：** 区域。 **取值范围：** 不涉及。
    * nodeNum  **参数解释：** 节点数量。 **取值范围：** 不涉及。
    * vcpus  **参数解释：** vCPU数量。 **取值范围：** 不涉及。
    * ram  **参数解释：** 内存大小，单位GB。 **取值范围：** 不涉及。
    * diskSize  **参数解释：** 磁盘大小，单位GB。 **取值范围：** 不涉及。
    * usedDiskSize  **参数解释：** 已使用磁盘大小，单位GB。 **取值范围：** 不涉及。
    * cidr  **参数解释：** VPC CIDR。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'actions' => null,
        'projectId' => null,
        'projectName' => null,
        'regionCode' => null,
        'nodeNum' => 'int32',
        'vcpus' => null,
        'ram' => null,
        'diskSize' => null,
        'usedDiskSize' => null,
        'cidr' => null
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
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例当前支持的操作。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 不涉及。
    * regionCode  **参数解释：** 区域。 **取值范围：** 不涉及。
    * nodeNum  **参数解释：** 节点数量。 **取值范围：** 不涉及。
    * vcpus  **参数解释：** vCPU数量。 **取值范围：** 不涉及。
    * ram  **参数解释：** 内存大小，单位GB。 **取值范围：** 不涉及。
    * diskSize  **参数解释：** 磁盘大小，单位GB。 **取值范围：** 不涉及。
    * usedDiskSize  **参数解释：** 已使用磁盘大小，单位GB。 **取值范围：** 不涉及。
    * cidr  **参数解释：** VPC CIDR。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'actions' => 'actions',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'regionCode' => 'region_code',
            'nodeNum' => 'node_num',
            'vcpus' => 'vcpus',
            'ram' => 'ram',
            'diskSize' => 'disk_size',
            'usedDiskSize' => 'used_disk_size',
            'cidr' => 'cidr'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例当前支持的操作。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 不涉及。
    * regionCode  **参数解释：** 区域。 **取值范围：** 不涉及。
    * nodeNum  **参数解释：** 节点数量。 **取值范围：** 不涉及。
    * vcpus  **参数解释：** vCPU数量。 **取值范围：** 不涉及。
    * ram  **参数解释：** 内存大小，单位GB。 **取值范围：** 不涉及。
    * diskSize  **参数解释：** 磁盘大小，单位GB。 **取值范围：** 不涉及。
    * usedDiskSize  **参数解释：** 已使用磁盘大小，单位GB。 **取值范围：** 不涉及。
    * cidr  **参数解释：** VPC CIDR。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'actions' => 'setActions',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'regionCode' => 'setRegionCode',
            'nodeNum' => 'setNodeNum',
            'vcpus' => 'setVcpus',
            'ram' => 'setRam',
            'diskSize' => 'setDiskSize',
            'usedDiskSize' => 'setUsedDiskSize',
            'cidr' => 'setCidr'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 实例ID。 **取值范围：** 不涉及。
    * name  **参数解释：** 实例名称。 **取值范围：** 不涉及。
    * status  **参数解释：** 实例状态。 **取值范围：** 不涉及。
    * actions  **参数解释：** 实例当前支持的操作。 **取值范围：** 不涉及。
    * projectId  **参数解释：** 项目ID。 **取值范围：** 不涉及。
    * projectName  **参数解释：** 项目名称。 **取值范围：** 不涉及。
    * regionCode  **参数解释：** 区域。 **取值范围：** 不涉及。
    * nodeNum  **参数解释：** 节点数量。 **取值范围：** 不涉及。
    * vcpus  **参数解释：** vCPU数量。 **取值范围：** 不涉及。
    * ram  **参数解释：** 内存大小，单位GB。 **取值范围：** 不涉及。
    * diskSize  **参数解释：** 磁盘大小，单位GB。 **取值范围：** 不涉及。
    * usedDiskSize  **参数解释：** 已使用磁盘大小，单位GB。 **取值范围：** 不涉及。
    * cidr  **参数解释：** VPC CIDR。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'actions' => 'getActions',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'regionCode' => 'getRegionCode',
            'nodeNum' => 'getNodeNum',
            'vcpus' => 'getVcpus',
            'ram' => 'getRam',
            'diskSize' => 'getDiskSize',
            'usedDiskSize' => 'getUsedDiskSize',
            'cidr' => 'getCidr'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['vcpus'] = isset($data['vcpus']) ? $data['vcpus'] : null;
        $this->container['ram'] = isset($data['ram']) ? $data['ram'] : null;
        $this->container['diskSize'] = isset($data['diskSize']) ? $data['diskSize'] : null;
        $this->container['usedDiskSize'] = isset($data['usedDiskSize']) ? $data['usedDiskSize'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
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
    *  **参数解释：** 实例ID。 **取值范围：** 不涉及。
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
    * @param string|null $id **参数解释：** 实例ID。 **取值范围：** 不涉及。
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
    *  **参数解释：** 实例名称。 **取值范围：** 不涉及。
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
    * @param string|null $name **参数解释：** 实例名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 实例状态。 **取值范围：** 不涉及。
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
    * @param string|null $status **参数解释：** 实例状态。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets actions
    *  **参数解释：** 实例当前支持的操作。 **取值范围：** 不涉及。
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
    * @param string[]|null $actions **参数解释：** 实例当前支持的操作。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 项目ID。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释：** 项目ID。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  **参数解释：** 项目名称。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName **参数解释：** 项目名称。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets regionCode
    *  **参数解释：** 区域。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode **参数解释：** 区域。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets nodeNum
    *  **参数解释：** 节点数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum **参数解释：** 节点数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets vcpus
    *  **参数解释：** vCPU数量。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getVcpus()
    {
        return $this->container['vcpus'];
    }

    /**
    * Sets vcpus
    *
    * @param string|null $vcpus **参数解释：** vCPU数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setVcpus($vcpus)
    {
        $this->container['vcpus'] = $vcpus;
        return $this;
    }

    /**
    * Gets ram
    *  **参数解释：** 内存大小，单位GB。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getRam()
    {
        return $this->container['ram'];
    }

    /**
    * Sets ram
    *
    * @param string|null $ram **参数解释：** 内存大小，单位GB。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRam($ram)
    {
        $this->container['ram'] = $ram;
        return $this;
    }

    /**
    * Gets diskSize
    *  **参数解释：** 磁盘大小，单位GB。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getDiskSize()
    {
        return $this->container['diskSize'];
    }

    /**
    * Sets diskSize
    *
    * @param string|null $diskSize **参数解释：** 磁盘大小，单位GB。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setDiskSize($diskSize)
    {
        $this->container['diskSize'] = $diskSize;
        return $this;
    }

    /**
    * Gets usedDiskSize
    *  **参数解释：** 已使用磁盘大小，单位GB。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getUsedDiskSize()
    {
        return $this->container['usedDiskSize'];
    }

    /**
    * Sets usedDiskSize
    *
    * @param string|null $usedDiskSize **参数解释：** 已使用磁盘大小，单位GB。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setUsedDiskSize($usedDiskSize)
    {
        $this->container['usedDiskSize'] = $usedDiskSize;
        return $this;
    }

    /**
    * Gets cidr
    *  **参数解释：** VPC CIDR。 **取值范围：** 不涉及。
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
    * @param string|null $cidr **参数解释：** VPC CIDR。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
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

