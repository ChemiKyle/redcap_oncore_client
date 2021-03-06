<div class="modal fade" id="oncore-data-<?php echo $id; ?>" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">OnCore data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php foreach ($data as $label => $value): ?>
                    <div class="form-group<?php echo empty($inline) ? '' : ' row'; ?>">
                        <label class="<?php echo empty($inline) ? '' : 'col-sm-6 '; ?>col-form-label text-right">
                            <strong><?php echo REDCap::escapeHtml($label); ?></strong>
                        </label>
                        <div<?php echo empty($inline) ? '' : ' class="col-sm-6"'; ?>>
                            <div class="form-control-plaintext"><?php echo $value === null ? '-' : $value; ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
