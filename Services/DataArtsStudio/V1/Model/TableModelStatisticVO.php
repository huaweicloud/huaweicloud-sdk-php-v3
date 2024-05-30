<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableModelStatisticVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableModelStatisticVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  total
    * published  published
    * syncTotal  syncTotal
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticStandardCoverageVO',
            'published' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticStandardCoverageVO',
            'syncTotal' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO',
            'physicalTable' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO',
            'technicalAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO',
            'businessAsset' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO',
            'metaDataLink' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO',
            'dataQuality' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  total
    * published  published
    * syncTotal  syncTotal
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'published' => null,
        'syncTotal' => null,
        'physicalTable' => null,
        'technicalAsset' => null,
        'businessAsset' => null,
        'metaDataLink' => null,
        'dataQuality' => null
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
    * total  total
    * published  published
    * syncTotal  syncTotal
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'published' => 'published',
            'syncTotal' => 'sync_total',
            'physicalTable' => 'physical_table',
            'technicalAsset' => 'technical_asset',
            'businessAsset' => 'business_asset',
            'metaDataLink' => 'meta_data_link',
            'dataQuality' => 'data_quality'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  total
    * published  published
    * syncTotal  syncTotal
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'published' => 'setPublished',
            'syncTotal' => 'setSyncTotal',
            'physicalTable' => 'setPhysicalTable',
            'technicalAsset' => 'setTechnicalAsset',
            'businessAsset' => 'setBusinessAsset',
            'metaDataLink' => 'setMetaDataLink',
            'dataQuality' => 'setDataQuality'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  total
    * published  published
    * syncTotal  syncTotal
    * physicalTable  physicalTable
    * technicalAsset  technicalAsset
    * businessAsset  businessAsset
    * metaDataLink  metaDataLink
    * dataQuality  dataQuality
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'published' => 'getPublished',
            'syncTotal' => 'getSyncTotal',
            'physicalTable' => 'getPhysicalTable',
            'technicalAsset' => 'getTechnicalAsset',
            'businessAsset' => 'getBusinessAsset',
            'metaDataLink' => 'getMetaDataLink',
            'dataQuality' => 'getDataQuality'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['syncTotal'] = isset($data['syncTotal']) ? $data['syncTotal'] : null;
        $this->container['physicalTable'] = isset($data['physicalTable']) ? $data['physicalTable'] : null;
        $this->container['technicalAsset'] = isset($data['technicalAsset']) ? $data['technicalAsset'] : null;
        $this->container['businessAsset'] = isset($data['businessAsset']) ? $data['businessAsset'] : null;
        $this->container['metaDataLink'] = isset($data['metaDataLink']) ? $data['metaDataLink'] : null;
        $this->container['dataQuality'] = isset($data['dataQuality']) ? $data['dataQuality'] : null;
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
    * Gets total
    *  total
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticStandardCoverageVO|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticStandardCoverageVO|null $total total
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets published
    *  published
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticStandardCoverageVO|null
    */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
    * Sets published
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StatisticStandardCoverageVO|null $published published
    *
    * @return $this
    */
    public function setPublished($published)
    {
        $this->container['published'] = $published;
        return $this;
    }

    /**
    * Gets syncTotal
    *  syncTotal
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null
    */
    public function getSyncTotal()
    {
        return $this->container['syncTotal'];
    }

    /**
    * Sets syncTotal
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null $syncTotal syncTotal
    *
    * @return $this
    */
    public function setSyncTotal($syncTotal)
    {
        $this->container['syncTotal'] = $syncTotal;
        return $this;
    }

    /**
    * Gets physicalTable
    *  physicalTable
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null
    */
    public function getPhysicalTable()
    {
        return $this->container['physicalTable'];
    }

    /**
    * Sets physicalTable
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null $physicalTable physicalTable
    *
    * @return $this
    */
    public function setPhysicalTable($physicalTable)
    {
        $this->container['physicalTable'] = $physicalTable;
        return $this;
    }

    /**
    * Gets technicalAsset
    *  technicalAsset
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null
    */
    public function getTechnicalAsset()
    {
        return $this->container['technicalAsset'];
    }

    /**
    * Sets technicalAsset
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null $technicalAsset technicalAsset
    *
    * @return $this
    */
    public function setTechnicalAsset($technicalAsset)
    {
        $this->container['technicalAsset'] = $technicalAsset;
        return $this;
    }

    /**
    * Gets businessAsset
    *  businessAsset
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null
    */
    public function getBusinessAsset()
    {
        return $this->container['businessAsset'];
    }

    /**
    * Sets businessAsset
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null $businessAsset businessAsset
    *
    * @return $this
    */
    public function setBusinessAsset($businessAsset)
    {
        $this->container['businessAsset'] = $businessAsset;
        return $this;
    }

    /**
    * Gets metaDataLink
    *  metaDataLink
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null
    */
    public function getMetaDataLink()
    {
        return $this->container['metaDataLink'];
    }

    /**
    * Sets metaDataLink
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null $metaDataLink metaDataLink
    *
    * @return $this
    */
    public function setMetaDataLink($metaDataLink)
    {
        $this->container['metaDataLink'] = $metaDataLink;
        return $this;
    }

    /**
    * Gets dataQuality
    *  dataQuality
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null
    */
    public function getDataQuality()
    {
        return $this->container['dataQuality'];
    }

    /**
    * Sets dataQuality
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\SyncStatusStatisticVO|null $dataQuality dataQuality
    *
    * @return $this
    */
    public function setDataQuality($dataQuality)
    {
        $this->container['dataQuality'] = $dataQuality;
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

